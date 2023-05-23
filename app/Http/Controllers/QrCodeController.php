<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index(){
        return view('qrcode');
    }

    public function indexResult(Request $request){

        $qcode = $request->qrcode;

        return view('qrcoderesult', compact('qcode'));
    }
}
