<?php

namespace App\Http\Controllers;

use App\Models\Kreteria;
use App\Models\Alternatif;
use App\Http\Controllers\Controller;



class NormalisasiController extends Controller
{
    public function calculateSaw()
    {
        $alternatives = Alternatif::all();
        $weights = [0.2,0.2,0.2,0.2,0.2]; // Bobot kriteria

        // $minValues = $alternatives->min(); // Mendapatkan nilai minimum dari setiap kolom
        // $maxValues = $alternatives->max(); // Mendapatkan nilai maksimum dari setiap kolom

        $results = [];
        $nomor = 0;

        foreach ($alternatives as $alternative) {
            $harga = $alternative->harga;
            $ram = $alternative->ram;
            $memory = $alternative->memory;
            $performasoc = $alternative->performasoc;
            $kamera = $alternative->kamera;
            // $keawetan = $alternative->keawetan;

            // Normalisasi setiap nilai kriteria
            $norm_harga     = 370000/ $harga;
            $norm_ram=  $ram/12;
            $norm_memory = 256/ $memory;
            $norm_performasoc= $performasoc / 900000;
            $norm_kamera = $kamera/ 64;
            // $norm_keawetan = ($keawetan - $minValues->keawetan) / ($maxValues->keawetan - $minValues->keawetan);


            // Hitung hasil SAW
            $hasil = ($weights[0] * $norm_harga)+ ($weights[1] * $norm_ram)  + ($weights[2] * $norm_memory)
                + ($weights[3] * $norm_performasoc) + ($weights[4] * $norm_kamera);

            $nomor++;

            $nama = $alternative->nama;
            $merek = $alternative->merek;
            $results[] = ['nomor' => $nomor, 'nama' => $nama, 'harga' => $norm_harga,'ram' => $norm_ram,
            'memory' => $norm_memory, 'performasoc' => $norm_performasoc,'kamera' => $norm_kamera,'merek' => $merek,'hasil'=>$hasil];
            // arsort($results);
        }   


        return view('pages.admin.saw.normalisasi', ['results' => collect($results)->sortByDesc('hasil')->values()->all()]);
    }
}
