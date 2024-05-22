<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Pengajuan;
use App\Models\Promo;
use Illuminate\Http\Request;
use App\Models\User;

use PDF;
class PDFController extends Controller
{
    public function generatePDF()
    {
        $pengajuan = Pengajuan::get();
        $paket = Paket::all();
        $promo = Promo::all();
        $user = User::all();
    
        $data = [
            'title' => '',
            'date' => date('m/d/Y'),
            'pengajuan' => $pengajuan,
            'paket' => $paket,
            'promo' => $promo,
            'user' => $user
        ]; 
              
        $pdf = PDF::loadView('myPDF', $data);
       
        return $pdf->download('save.pdf');
    }
}
