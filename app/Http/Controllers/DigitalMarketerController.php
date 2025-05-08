<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class DigitalMarketerController extends Controller
{
    public function result1()
    {
        // Konten yang ingin ditampilkan pada halaman
        $contents = [
            [
                'title' => 'Panduan Instagram Shopping, Tiktok Shop & Whatsapp Business',
                'desc' => 'Untuk memahami memulai bisnis menggunakan sosial media.',
                'image' => 'sc1.png', // Nama file gambar
            ],
            [
                'title' => 'Social Commerce For Small Business',
                'desc' => 'Memanfaatkan platform B2B sebagai jembatan bisnis.',
                'image' => 'sc2.png',
            ],
            [
                'title' => 'Template Social Media Instagram & Tiktok',
                'desc' => 'Template gratis yang bisa Anda kustomisasi sesuai kebutuhan.',
                'image' => 'sc3.png',
            ],
            [
                'title' => 'Panduan Fotografi Pakai Smartphone',
                'desc' => 'Kiat-kiat dalam memaksimalkan hasil foto produk Anda.',
                'image' => 'sc4.png',
            ],
            [
                'title' => 'Aset Gambar Dan Video Yang Mungkin Anda Butuhkan',
                'desc' => 'Sebagai pelengkap promosi Anda untuk menunjang jangkauan market.',
                'image' => 'sc5.png',
            ],
            [
                'title' => 'Analitik Dan Evaluasi',
                'desc' => 'Ketahui sejauh mana bisnis Anda mengalami peningkatan.',
                'image' => 'sc6.png',
            ],
        ];

        // Jadwal yang terkait dengan konten
        $schedules = [
            [
                'day' => 'Sel',
                'date' => '7 Januari 2025',
                'title' => 'Promosi Instagram',
                'desc' => 'Lorem ipsum dolor amet',
                'tag' => 'Social'
            ],
            [
                'day' => 'Min',
                'date' => '12 Januari 2025',
                'title' => 'Rapat Konten Maret',
                'desc' => 'Lorem ipsum dolor amet',
                'tag' => 'Work'
            ],
            [
                'day' => 'Kam',
                'date' => '16 Januari 2025',
                'title' => 'Promosi Tiktok',
                'desc' => 'Lorem ipsum dolor amet',
                'tag' => 'Social'
            ],
        ];

        // Mengirim data konten dan jadwal ke view
        return view('quiz.result-quiz1', compact('contents', 'schedules'));
    }

    // Menambahkan method untuk menampilkan gambar
    public function showImage($filename)
    {
        // Menentukan path gambar di folder public/img
        $path = public_path('img/' . $filename);

        // Mengecek apakah file ada di folder img
        if (File::exists($path)) {
            // Mengembalikan gambar jika ada
            return Response::file($path);
        }

        // Jika gambar tidak ditemukan, tampilkan error 404
        abort(404);
    }
}