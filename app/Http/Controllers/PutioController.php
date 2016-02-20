<?php

namespace App\Http\Controllers;

use Uhura\Uhura;
use App\PutioToken;
use Illuminate\Http\Request;
use Uhura\ResponseHandler\Json;

class PutioController extends Controller
{
    public function auth()
    {
        return redirect(sprintf("https://api.put.io/v2/oauth2/authenticate?%s", http_build_query([
            'client_id' => env('PUTIO_CLIENT_ID'),
            'response_type' => 'code',
            'redirect_uri' => env('PUTIO_REDIRECT_URL')
        ])));
    }

    public function accepted(Request $request)
    {
        $putio = new Uhura('https://api.put.io/v2');
        $putio->useResponseHandler(new Json);

        $response = $putio->oauth2->access_token->get([
            'client_id' => env('PUTIO_CLIENT_ID'),
            'client_secret' => env('PUTIO_CLIENT_SECRET'),
            'grant_type' => 'authorization_code',
            'redirect_uri' => env('PUTIO_REDIRECT_URL'),
            'code' => $request->input('code')
        ]);

        PutioToken::create([
            'token' => $response['access_token']
        ]);

        return redirect()->to('settings');
    }
}
