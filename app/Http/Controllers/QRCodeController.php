<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function generateQrCode(Request $request)
    {
        $text = $request->input('qr-code'); 
        $size = $request->input('qr-size', 100); 
    
        // Generate QR Code
        $qrCode = QrCode::size($size)->generate($text);
    
        return back()->with([
            'qr-code' => $qrCode,
            'text' => $text,
            'qr-size' => $size,
        ]);
    }
}