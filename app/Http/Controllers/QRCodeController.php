<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index()
    {
        $text = 'hai'; // URL untuk QR Code
        $fileName = 'qrcodes/' . md5($text) . '.png';

        // Cek apakah QR Code sudah ada
        if (!Storage::disk('public')->exists($fileName)) {
            // Generate QR Code dengan GD Library
            $qrCode = QrCode::format('png')->size(200)->generate($text);

            // Simpan QR Code di storage
            Storage::disk('public')->put($fileName, $qrCode);
        }

        // Ambil URL QR Code dari storage
        $qrCodeUrl = asset('storage/' . $fileName);

        return view('welcome', compact('qrCodeUrl'));
    }
}

