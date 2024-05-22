<?php

namespace App\Charts;

use App\Models\Pencabutan;
use App\Models\Pengajuan;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class LaporanPengajuansChart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart1)
    {
        $this->chart = $chart1;
    }

    public function build()
    {
        // $tahun = date('Y');
        // $bulan = date('M');
        // for ($i=1; $i <= $bulan ; $i++) {
        //     $totalPemutusan = Pencabutan::id()->whereYear('tgl_pencabutan', $tahun)->whereMonth('tgl_pencabutan', $i)->sum('jumlah');
        //     $dataBulan[]= $i;
        //     $dataTotal[] = $totalPemutusan;

        // }
        // $tahun = date('Y');
        // $bulan = date('m'); // Menggunakan 'm' untuk mendapatkan angka bulan (01-12)

        // $dataBulan = [];
        // $dataTotal = [];

        // for ($i = 1; $i <= $bulan; $i++) {
        //     // Menggunakan Pencabutan::query() untuk mendapatkan instance query baru dari model Pencabutan
        //     // Tidak perlu menggunakan Pencabutan::id() di sini, kecuali jika Anda memiliki metode id() khusus dalam model Pencabutan
        //     $totalPemutusan = Pencabutan::whereYear('tgl_pencabutan', $tahun)->whereMonth('tgl_pencabutan', $i)->count();

        //     $dataBulan[] = $i; // Menambahkan angka bulan ke array
        //     $dataTotal[] = $totalPemutusan; // Menambahkan total pemutusan ke array
        // }

        // // dd($dataTotal);

        // return $this->chart->lineChart()
        //     ->setTitle('Data Pemutusan')
        //     ->setSubtitle('Total Pemutusan Setiap Bulan.')
        //     ->addData(['Total Pemutusan'])
        //     ->setXAxis([$dataBulan]);
        $tahun = date('Y');
        $bulan = date('m');

        $dataBulan = [];
        $dataTotal = [];

        for ($i = 1; $i <= $bulan; $i++) {
            $totalPemasangan = Pengajuan::whereYear('tgl_pemasangan', $tahun)->whereMonth('tgl_pemasangan', $i)->count(); // Menghitung jumlah data pemutusan per bulan

            $dataBulan[] = Carbon::create()->month($i)->format('F'); // Menambahkan angka bulan ke array
            $dataTotal[] = $totalPemasangan; // Menambahkan total pemutusan ke array
        }

        // Return chart object
        return $this->chart
            ->lineChart()
            ->setTitle('Total Pemasangan Setiap Bulan.')
            // ->setSubtitle('Total Pemasangan Setiap Bulan.')
            ->addData('Total Pemasangan', $dataTotal) // Menambahkan data total pemutusan ke chart
            ->setHeight(300)
            ->setXAxis($dataBulan); // Mengatur sumbu X dengan data bulan
    }
}
