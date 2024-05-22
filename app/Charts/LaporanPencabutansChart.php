<?php

namespace App\Charts;

use App\Models\Pencabutan;
use Carbon\Carbon;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use ArielMejiaDev\LarapexCharts\LarapexChart;


class LaporanPencabutansChart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart2)
    {
        $this->chart = $chart2;
    }
        public function build()
    {
        $tahun = date('Y');
        $bulan = date('m');

        $dataBulan = [];
        $dataTotal = [];

        for ($i = 1; $i <= $bulan; $i++) {
            $totalPemutusan = Pencabutan::whereYear('tgl_pencabutan', $tahun)->whereMonth('tgl_pencabutan', $i)->count(); // Menghitung jumlah data pemutusan per bulan

            $dataBulan[] = Carbon::create()->month($i)->format('F'); // Menambahkan angka bulan ke array
            $dataTotal[] = $totalPemutusan; // Menambahkan total pemutusan ke array
        }

        // Return chart object
        return $this->chart
            ->lineChart()
            ->setTitle('Total Pemutusan Setiap Bulan.')
            // ->setSubtitle('Total Pemasangan Setiap Bulan.')
            ->addData('Total Pemutusan', $dataTotal) // Menambahkan data total pemutusan ke chart
            ->setHeight(300)
            ->setXAxis($dataBulan); // Mengatur sumbu X dengan data bulan
    }
}
