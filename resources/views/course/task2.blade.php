@extends('main')
@extends('layouts.app')

@section('title', 'contact')
@section('hero')

<div class="container mx-auto px-4 py-6 pt-20 md:pt-24">

    {{-- Judul & Info --}}
    <div class="mb-4">
        <h2 class="text-xl font-semibold border border-orange-400 px-4 py-2 rounded-md w-fit">
            Cara Membuat Konten Menarik Instagram Khusus Small Business Owner
        </h2>
        <p class="text-sm text-gray-500 mt-1">6 Video · 1 jam 05 menit</p>
    </div>

    {{-- Konten Utama --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        {{-- Video & Task --}}
        <div class="lg:col-span-2 space-y-6">
            {{-- Video --}}
            <div class="bg-gray-100 rounded-md overflow-hidden shadow">
                <video class="w-full" controls>
                    <source src="#" type="video/mp4">
                    Video tidak tersedia.
                </video>
            </div>

            {{-- Task Modul --}}
            <div class="bg-white p-4 rounded-md shadow">
                <h3 class="font-semibold text-lg mb-2">Task Modul 2</h3>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2">
                        <input type="checkbox" checked class="mt-1">
                        <span>Isi Template Buyer Persona yang bisa diunduh</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <input type="checkbox" class="mt-1">
                        <span>Tentukan brand voice bisnis Anda.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <input type="checkbox" class="mt-1">
                        <span>Coba buat 1 postingan Instagram dengan gaya komunikasi yang sudah ditentukan!</span>
                    </li>
                </ul>
            </div>

            {{-- Tab Info --}}
            <div class="flex gap-2 flex-wrap">
                <span class="bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-medium">Modul</span>
                <span class="bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-medium">Task</span>
                <span class="bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-medium">Post-test</span>
                <span class="bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-medium">Forum Diskusi</span>
            </div>

            {{-- Sertifikat Info --}}
            <div class="bg-white p-4 rounded-md shadow">
                <h3 class="font-semibold mb-2">Sertifikat Course</h3>
                <p class="text-sm text-gray-600">Kamu baru menyelesaikan 2 dari 5 video. Selesaikan progress dengan menyelesaikan semua video dan kuis dalam course ini.</p>
                <div class="w-full bg-gray-200 h-2 rounded mt-2">
                    <div class="bg-orange-500 h-2 rounded" style="width: 40%"></div>
                </div>
            </div>
        </div>

        {{-- Sidebar Modul Kursus --}}
        <div class="space-y-4">
            <div class="bg-white p-4 rounded-md shadow">
                <p class="text-sm font-medium mb-2">2/6 COMPLETED</p>
                <div class="w-full bg-gray-200 h-2 rounded">
                    <div class="bg-orange-500 h-2 rounded" style="width: 33%"></div>
                </div>
            </div>

            {{-- List Modul --}}
            @php
                $moduls = [
                    ['title' => 'Mengapa Instagram adalah Platform Terbaik untuk Small Business?', 'duration' => '7 Menit', 'active' => true],
                    ['title' => 'Menentukan Target Audiens dan Brand Voice Anda', 'duration' => '7 Menit', 'active' => true],
                    ['title' => 'Format Konten Instagram yang Menarik untuk Small Business', 'duration' => '7 Menit'],
                    ['title' => 'Rahasia Copywriting Instagram yang Menjual', 'duration' => '7 Menit'],
                    ['title' => 'Strategi Visual & Desain Instagram untuk Small Business', 'duration' => '7 Menit'],
                    ['title' => 'Cara Meningkatkan Engagement & Konversi Penjualan di Instagram', 'duration' => '7 Menit'],
                    ['title' => 'Quiz', 'duration' => '15 Menit'],
                    ['title' => 'Sertifikat', 'duration' => 'Unduh'],
                ];
            @endphp

            @foreach($moduls as $modul)
            <div class="p-4 rounded-md shadow-sm {{ isset($modul['active']) && $modul['active'] ? 'bg-orange-500 text-white' : 'bg-white' }}">
                <p class="font-medium text-sm">{{ $modul['title'] }}</p>
                <p class="text-xs mt-1">{{ $modul['duration'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection