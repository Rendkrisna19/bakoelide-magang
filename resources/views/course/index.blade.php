@extends('main')
@extends('layouts.app')

@section('title', 'course')
@section('hero')

<div class="max-w-7xl mx-auto p-4 grid grid-cols-1 md:grid-cols-3 gap-6 pt-20 md:pt-24">

    <!-- Left Content -->
    <div class="md:col-span-2 space-y-4">
        <a href="#" class="text-sm text-gray-600">&larr; Kembali</a>
        <h1 class="text-lg font-bold border p-4 rounded border-orange-400">
            Cara Membuat Konten Menarik Instagram Khusus Small Business Owner
        </h1>

        <!-- Video Section -->
        <div class="aspect-video bg-black rounded overflow-hidden">
            <video controls class="w-full h-full object-cover">
                <source src="/video.mp4" type="video/mp4">
                Browser tidak mendukung video.
            </video>
        </div>

        <!-- Caption -->
        <div class="bg-orange-50 p-4 rounded">
            <h2 class="font-semibold mb-2">Caption</h2>
            <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adi pisicing elit...</p>
        </div>

        <!-- Dalam Kursus Ini -->
        <div class="bg-white p-4 rounded border">
            <h3 class="font-semibold mb-2">Dalam Kursus Ini</h3>
            <div class="flex flex-wrap gap-2">
                <span class="bg-orange-100 text-orange-700 px-4 py-1 rounded text-sm font-semibold">Modul</span>
                <span class="bg-orange-100 text-orange-700 px-4 py-1 rounded text-sm font-semibold">Task</span>
                <span class="bg-orange-100 text-orange-700 px-4 py-1 rounded text-sm font-semibold">Post-test</span>
                <span class="bg-orange-100 text-orange-700 px-4 py-1 rounded text-sm font-semibold">Forum Diskusi</span>
            </div>
        </div>

        <!-- Sertifikat -->
        <div class="bg-white p-4 rounded border">
            <h3 class="font-semibold mb-2">Sertifikat Course</h3>
            <p class="text-sm">Kamu baru menyelesaikan 2 dari 5 video...</p>
            <div class="w-full h-2 bg-gray-200 rounded mt-2">
                <div class="bg-orange-500 h-2 rounded" style="width: 40%"></div>
            </div>
        </div>
    </div>

    <!-- Sidebar Modul Kursus -->
    <aside class="space-y-4">
        <div class="bg-white p-4 rounded border">
            <h3 class="font-semibold">Modul Kursus</h3>
            <div class="h-2 bg-gray-200 rounded mt-2 mb-4">
                <div class="bg-orange-500 h-2 rounded w-1/3"></div>
            </div>

            <div class="space-y-2 text-sm">
                <div class="flex justify-between items-center p-2 rounded bg-gray-100">
                    <span>✔️ Mengapa Instagram...</span>
                    <span>7 Menit</span>
                </div>
                <div class="bg-orange-500 text-white p-2 rounded space-y-1">
                    <div class="flex justify-between">
                        <span>🎯 Menentukan Target Audiens</span>
                        <span>7 Menit</span>
                    </div>
                    <ul class="text-xs space-y-1 ml-4">
                        <li>- Post-test Modul 2</li>
                        <li>- Task Modul 2</li>
                        <li>- Download Template</li>
                    </ul>
                </div>
                <div class="p-2 border rounded">Format Konten Instagram... <span class="float-right">7 Menit</span></div>
                <div class="p-2 border rounded">Rahasia Copywriting... <span class="float-right">7 Menit</span></div>
                <div class="p-2 border rounded">Strategi Visual... <span class="float-right">7 Menit</span></div>
                <div class="p-2 border rounded">Cara Meningkatkan... <span class="float-right">7 Menit</span></div>
                <div class="p-2 border rounded">Quiz <span class="float-right">15 Menit</span></div>
                <div class="p-2 border rounded">Sertifikat <span class="float-right">⬇️ Unduh</span></div>
            </div>
        </div>
    </aside>
</div>


@endsection