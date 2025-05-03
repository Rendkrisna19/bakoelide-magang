@extends('main')
@extends('layouts.app')

@section('title', 'course-quiz')
@section('hero')

<div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-6 pt-20 md:pt-24">

    <!-- Left Content -->
    <div class="md:col-span-2 space-y-8">

        <!-- Judul & Info -->
        <div>
            <a href="#" class="text-sm text-gray-600">&larr; Kembali</a>
            <h1 class="mt-2 p-4 border border-orange-400 text-lg font-semibold rounded">
                Cara Membuat Konten Menarik Instagram Khusus Small Business Owner
                <div class="text-sm text-gray-500 mt-1">6 Video &bull; 1 jam 05 menit</div>
            </h1>
        </div>

        <!-- Soal 1 -->
        <div class="space-y-2">
            <h2 class="font-semibold">Menentukan Target Audiens Adalah Dengan Cara?<span class="text-red-500">*</span></h2>
            <div class="space-y-2 text-sm">
                <label class="flex items-center gap-2">
                    <input type="radio" name="soal1" class="accent-orange-500">
                    Saya adalah pemilik bisnis kecil dan ingin meningkatkan penjualan online.
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="soal1" class="accent-orange-500">
                    Saya seorang pemasar digital yang mencari strategi dan alat baru.
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="soal1" class="accent-orange-500" checked>
                    Saya seorang kreatif yang ingin mengembangkan branding dan strategi pemasaran saya.
                </label>
            </div>
        </div>

        <!-- Soal 2 -->
        <div class="space-y-2">
            <h2 class="font-semibold">Format Content Yang Relevan Untuk Small Business Owner Adalah?<span class="text-red-500">*</span></h2>
            <div class="space-y-2 text-sm">
                <label class="flex items-center gap-2">
                    <input type="radio" name="soal2" class="accent-orange-500">
                    Saya ingin memulai social commerce dan meningkatkan penjualan.
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="soal2" class="accent-orange-500">
                    Saya ingin mempelajari cara membuat konten yang lebih menarik.
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="soal2" class="accent-orange-500" checked>
                    Saya membutuhkan template desain dan alat marketing.
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="soal2" class="accent-orange-500">
                    Saya ingin mendapatkan strategi branding untuk bisnis saya.
                </label>
            </div>
        </div>

        <!-- Soal 3 (Checkbox) -->
        <div class="space-y-2">
            <h2 class="font-semibold">Yang Termasuk Cara Meningkatkan Engagement Yaitu?<span class="text-red-500">*</span></h2>
            <div class="space-y-2 text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-orange-500" checked>
                    Saya kesulitan mendapatkan engagement di media sosial.
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-orange-500" checked>
                    Saya tidak tahu cara memulai toko online (Instagram/TikTok Shop).
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-orange-500">
                    Saya tidak punya waktu untuk membuat konten.
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-orange-500" checked>
                    Saya membutuhkan bimbingan tentang strategi digital.
                </label>
            </div>
        </div>

        <!-- Tombol Submit -->
        <button class="bg-orange-500 text-white px-6 py-2 rounded font-semibold text-sm mt-4 hover:bg-orange-600">
            Submit Quiz
        </button>
    </div>

    <!-- Sidebar -->
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

            <div class="px-3 py-2 bg-orange-500 text-white rounded font-medium flex justify-between">
                Quiz
                <span class="text-xs">15 Menit</span>
            </div>

            <div class="px-3 py-2 rounded border flex justify-between">
                Sertifikat
                <a href="#" class="text-orange-500 text-xs font-medium underline">Unduh</a>
            </div>
        </div>
    </aside>

</div>
@endsection
