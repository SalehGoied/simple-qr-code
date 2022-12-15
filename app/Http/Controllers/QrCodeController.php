<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index(Request $request)
    {
        $url = null;

        if($request->url){
            $request->validate(['url'=> 'url']);
            $url = $request->url;
        }
        return view('qrcode', compact('url'));
    }
}
