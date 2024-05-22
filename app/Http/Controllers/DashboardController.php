<?php

namespace App\Http\Controllers;

use App\Charts\LaporanPencabutansChart;
use App\Charts\LaporanPengajuansChart;
use App\Models\Barang;
use App\Models\Paket;
use App\Models\Pelanggan;
use App\Models\Pengajuan;
use App\Models\ViewPencabutan;
use App\Models\ViewPengajuan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(LaporanPengajuansChart $chart1,LaporanPencabutansChart $chart2){

        // $data['chart'] = $chart->build();

        $chart1 = $chart1->build();
        $chart2 = $chart2->build();

        $jml_brg = Barang::count();
        $jml_paket = Paket::count();
        $jml_pelanggan = Pelanggan::count();
        $jml_pengajuan = Pengajuan::count();
        // dd($jml_brg, $jml_paket, $jml_pelanggan, $jml_pengajuan);

        
        return view('dashboard',compact('chart1', 'chart2'))->with([
            'jml_brg'=> $jml_brg,
            'jml_paket'=> $jml_paket,
            'jml_pelanggan'=> $jml_pelanggan,
            'jml_pengajuan'=> $jml_pengajuan

        ]);
        // return view('users.index', ['chart' => $chart->build()]);
    }



    // public function pengajuan(){
    //     $jml_peng = ViewPengajuan::all();
    //     return response()->json($jml_peng);
    // }
    // public function pencabutan(){
    //     $jml_pen = ViewPencabutan::all();
    //     return response()->json($jml_pen);
    // }

    public function pengajuanChart(LaporanPengajuansChart $chart){
        
    }
}
