@extends('main')
@extends('layouts.app')

@section('title', 'course')
@section('hero')
@extends('layouts.app') {{-- Gunakan hanya jika layout punya @yield('content') --}}

@section('title', 'Sertifikat Kursus')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-6 pt-20 md:pt-24">

    <!-- Konten Kiri -->
    <div class="md:col-span-2 space-y-6">
        <!-- Judul Kursus -->
        <div>
            <a href="#" class="text-sm text-gray-600">&larr; Kembali</a>
            <h1 class="mt-2 p-4 border border-orange-400 text-lg font-semibold rounded">
                Cara Membuat Konten Menarik Instagram Khusus Small Business Owner
                <div class="text-sm text-gray-500 mt-1">6 Video &bull; 1 jam 05 menit</div>
            </h1>
        </div>

        <!-- Sertifikat -->
        <div class="border rounded-lg p-6 bg-white text-center">
            <img src="{{ asset('img/Sertifikat Modul 1.png') }}"alt="Sertifikat" class="mx-auto w-full max-w-xl">
            <div class="mt-4 flex justify-center gap-4">
                <button class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600">Download</button>
                <button class="bg-orange-100 text-orange-500 px-6 py-2 rounded hover:bg-orange-200">Share</button>
                <button class="bg-white border border-orange-500 text-orange-500 px-6 py-2 rounded hover:bg-orange-100">View</button>
            </div>
        </div>

        <!-- Pesan Selamat -->
        <div class="bg-gray-50 p-4 rounded text-center">
            <p class="text-sm">Selamat!<br>Anda telah menyelesaikan seluruh kursus untuk <strong>“Small Business Owner”</strong><br> Saatnya bagi Anda untuk bergabung dengan komunitas kami.</p>
            <button class="mt-4 bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600">Mulai Diskusi Baru</button>
        </div>
    </div>

    <!-- Sidebar Modul Kursus -->
    <aside class="bg-white border rounded p-4 space-y-4">
        <div>
            <h3 class="font-semibold text-sm mb-1">Modul Kursus</h3>
            <div class="w-full h-2 bg-gray-200 rounded">
                <div class="bg-orange-500 h-2 rounded w-1/3"></div>
            </div>
            <div class="text-xs mt-1 text-gray-500">2/6 COMPLETED</div>
        </div>

        <div class="space-y-2 text-sm">
            <div class="flex items-center justify-between bg-gray-100 px-3 py-2 rounded">
                <span>✔️ Mengapa Instagram adalah Platform Terbaik untuk Small Business?</span>
                <span class="text-gray-500 text-xs">7 Menit</span>
            </div>
            <div class="px-3 py-2 rounded border">Menentukan Target Audiens dan Brand Voice Anda <span class="float-right text-xs">7 Menit</span></div>
            <div class="px-3 py-2 rounded border">Format Konten Instagram yang Menarik untuk Small Business <span class="float-right text-xs">7 Menit</span></div>
            <div class="px-3 py-2 rounded border">Rahasia Copywriting Instagram yang Menjual <span class="float-right text-xs">7 Menit</span></div>
            <div class="px-3 py-2 rounded border">Strategi Visual & Desain Instagram untuk Small Business <span class="float-right text-xs">7 Menit</span></div>
            <div class="px-3 py-2 rounded border">Cara Meningkatkan Engagement & Konversi Penjualan di Instagram <span class="float-right text-xs">7 Menit</span></div>

            <div class="px-3 py-2 rounded border flex justify-between">
                Quiz <span class="text-xs">15 Menit</span>
            </div>

            <div class="px-3 py-2 bg-orange-500 text-white rounded font-medium flex justify-between">
                Sertifikat
                <a href="#" class="text-xs underline">Unduh</a>
            </div>
        </div>
    </aside>

</div>
@endsection
