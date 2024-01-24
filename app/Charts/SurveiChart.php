<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Survei;

class SurveiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        // Program studi yang ingin Anda analisis
        $programStudis = ['D3 Farmasi', 'S1 Matematika', 'D3 Kebidanan', 'D3 Keperawatan', 'D3 Lab Sains', 'S1 Biologi', 'S1 Kimia', 'S1 Statistika'];

        // Inisialisasi array untuk menyimpan data nilai
        $nilaiData = [
            '1' => [],
            '2' => [],
            '3' => [],
            '4' => [],
        ];

        // Loop melalui setiap program studi
        foreach ($programStudis as $programStudi) {
            // Ambil data dari database berdasarkan program studi
            $data = Survei::where('program_studi', $programStudi)->get();

            // Loop melalui hasil query dan hitung jumlah responden yang memberikan nilai 1, 2, 3, dan 4
            foreach ($data as $item) {
                $nilaiData['1'][] = $item->kejujuran_etika;
                $nilaiData['2'][] = $item->kemampuan_bidang_keilmuan;
                $nilaiData['3'][] = $item->kemampuan_bahasa_asing;
                $nilaiData['4'][] = $item->kemampuan_teknologi_informasi;
                $nilaiData['5'][] = $item->kemampuan_berkomunikasi;
                $nilaiData['6'][] = $item->kemampuan_kerjasama_tim;
                $nilaiData['7'][] = $item->kedisiplinan;
                $nilaiData['8'][] = $item->kepercayaan_diri;
                $nilaiData['9'][] = $item->rasa_tanggungjawab;
                $nilaiData['10'][] = $item->kemampuan_menyampaikan_ide;
                $nilaiData['11'][] = $item->keunggulan_alumni;
                $nilaiData['12'][] = $item->kelemahan_alumni;
                $nilaiData['13'][] = $item->kualitas_alumni;
                $nilaiData['14'][] = $item->kompetensi_penting;
                $nilaiData['15'][] = $item->saran_pemantapan_kompetensi;
                $nilaiData['16'][] = $item->saran_lembaga_unib;
            }
        }

        // Buat grafik
        return $this->chart->barChart()
            ->setTitle('Grafik Nilai Survei per Program Studi')
            ->addData('Nilai 1', $nilaiData['1'])
            ->addData('Nilai 2', $nilaiData['2'])
            ->addData('Nilai 3', $nilaiData['3'])
            ->addData('Nilai 4', $nilaiData['4'])
            ->setXAxis(['Responden 1', 'Responden 2', 'Responden 3', '...']) // Sesuaikan dengan jumlah responden
            ->setColors(['#e74c3c', '#f39c12', '#3498db', '#2ecc71']); // Warna grafik
    }
}
