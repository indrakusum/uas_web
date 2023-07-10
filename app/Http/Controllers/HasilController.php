<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NormalisasiController;

class HasilController extends Controller
{
    //
    public function calculateSaw()
    {
        $alternatives = Alternatif::all();
        $weights = [0.11,0.26,0.16,0.21,0.26]; // Bobot kriteria

        // $normalisasi = NormalisasiController::all();
        // $minValues = $alternatives->min(); // Mendapatkan nilai minimum dari setiap kolom
        // $maxValues = $alternatives->max(); // Mendapatkan nilai maksimum dari setiap kolom

        $results = [];
        $nomor = 0;

        foreach ($alternatives as $alternative) {
            $harga = $alternative->harga;
            $kualitas = $alternative->kualitas;
            $berat = $alternative->berat;
            $iso = $alternative->iso;
            $resolusi = $alternative->resolusi;
            // $keawetan = $alternative->keawetan;

            // Normalisasi setiap nilai kriteria
            $norm_harga = 120/ $harga;
            $norm_kualitas =  $kualitas/300 ;
            $norm_berat = 1000/ $berat;
            $norm_iso = $iso / 6400;
            $norm_resolusi = $resolusi/ 1600;
            // $norm_keawetan = ($keawetan - $minValues->keawetan) / ($maxValues->keawetan - $minValues->keawetan);


            // Hitung hasil SAW
            $hasil = ($weights[0] * $norm_harga)+ ($weights[1] * $norm_kualitas)  + ($weights[2] * $norm_berat)
                + ($weights[3] * $norm_iso) + ($weights[4] * $norm_resolusi);

            $nomor++;

            $nama_alt = $alternative->nama;
            $des = $alternative->deskripsi;
            $results[] = ['nomor' => $nomor, 'nama_alt' => $nama_alt, 'deskripsi' => $des, 'hasil'=>$hasil];
            arsort($results);
        }


        return view('hasil', ['results' => collect($results)->sortByDesc('hasil')->values()->all()]);
    }
    public function tampilUser()
    {
        $alternatives = Alternatif::all();
        $weights = [0.11,0.26,0.16,0.21,0.26]; // Bobot kriteria

        // $normalisasi = NormalisasiController::all();
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
            $norm_harga     = 120/ $harga;
            $norm_ram=  $ram/300 ;
            $norm_memory = 1000/ $memory;
            $norm_performasoc= $performasoc / 6400;
            $norm_kamera = $kamera/ 1600;
            // $norm_keawetan = ($keawetan - $minValues->keawetan) / ($maxValues->keawetan - $minValues->keawetan);


            // Hitung hasil SAW
            $hasil = ($weights[0] * $norm_harga)+ ($weights[1] * $norm_ram)  + ($weights[2] * $norm_memory)
                + ($weights[3] * $norm_performasoc) + ($weights[4] * $norm_kamera);

            $nomor++;

            $nama_alt = $alternative->nama;
            // $lokasi = $alternative->lokasi;
            $image = $alternative->image;
            $des = $alternative->deskripsi;
            $results[] = ['nomor' => $nomor, 'nama_alt' => $nama_alt,'image' => $image,'deskripsi' => $des, 'hasil'=>$hasil];
            arsort($results);
        }


        return view('TampilanUser.app', ['results' => collect($results)->sortByDesc('hasil')->values()->all()]);
    }
}
