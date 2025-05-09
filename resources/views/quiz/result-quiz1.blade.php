@extends('main')
@section('title', 'digital markerter')
@extends('layouts.app')
@section('hero')
    <section class="product-hero">
        <div class="product-hero-content">
            <h1> 
                {{ $translator->translate('Welcome!') }}
            </h1>
            <br>
          
            <div class="product-hero-btn">
                <a href="{{ route('blank-page') }}">{{ $translator->translate('Follow Tur') }}</a>
            </div>
        </div>
    </section>
@endsection


@section('content')

    {{-- Tab Filters --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-10 mt-6">
        <div class="flex gap-3 flex-wrap">
            @foreach (['Semua', 'Panduan Social Commerce', 'Template Media Sosial', 'Konten Visual', 'Analitik dan Evaluasi'] as $item)
                <button class="px-4 py-2 rounded-full border text-sm font-medium {{ $loop->first ? 'bg-orange-500 text-white' : 'bg-white hover:bg-orange-100' }}">
                    {{ $item }}
                </button>
            @endforeach
        </div>
    </div>

    {{-- Main Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-10 mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
        {{-- Left Column - Cards --}}
        <div class="lg:col-span-2 space-y-4">
            @foreach ($contents as $content)
                <div class="border rounded-lg p-4 bg-white shadow-sm">
                    <div class="flex items-center gap-4">
                        <img src="{{ route('image.show', ['filename' => $content['image']]) }}" class="w-28 h-20 rounded-lg object-cover" alt="Thumbnail">
                        
                        <div>
                            <h3 class="font-bold">{{ $content['title'] }}</h3>
                            <p class="text-sm text-gray-600">{{ $content['desc'] }}</p>
                            <a href="/course" class="text-orange-500 text-sm font-semibold mt-1 inline-block">
                                Baca Lebih Lanjut →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Right Column - Progress + Calendar + Tasks --}}
        <div class="space-y-4">
            {{-- Progress Bar --}}
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <p class="font-semibold mb-2">Pantau Progress Langkah Anda!</p>
                <div class="w-full bg-gray-200 h-2 rounded-full">
                    <div class="bg-orange-500 h-2 rounded-full" style="width: 52%;"></div>
                </div>
            </div>

            {{-- Calendar --}}
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <p class="font-semibold mb-2">January 2025</p>
                <div class="grid grid-cols-7 text-center text-sm gap-2">
                    @foreach(['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
                        <div class="font-bold">{{ $day }}</div>
                    @endforeach
                    @foreach(range(29, 31) as $d)
                        <div class="text-gray-400">{{ $d }}</div>
                    @endforeach
                    @foreach(range(1, 31) as $day)
                        <div class="{{ in_array($day, [7, 12, 16]) ? 'bg-orange-500 text-white rounded-full' : '' }}">{{ $day }}</div>
                    @endforeach
                </div>
            </div>

            {{-- Task Buttons --}}
            <div class="flex justify-between gap-3">
                <a href="#" class="bg-white border px-3 py-2 rounded-md w-full text-sm text-center hover:bg-gray-100">
                    Google Spreadsheet
                </a>
                <a href="#" class="bg-white border px-3 py-2 rounded-md w-full text-sm text-center hover:bg-gray-100">
                    Google Tasks
                </a>
            </div>

            {{-- Agenda List --}}
            <div class="space-y-3">
                @foreach ($schedules as $schedule)
                    <div class="bg-orange-500 text-white p-4 rounded-lg shadow-sm">
                        <p class="text-sm font-semibold">{{ $schedule['day'] }}, {{ $schedule['date'] }}</p>
                        <p class="text-xs mb-1">{{ $schedule['title'] }}</p>
                        <p class="text-xs text-orange-100">{{ $schedule['desc'] }}</p>
                        <div class="flex justify-between text-xs mt-2">
                            <span>🧑 Zoom</span>
                            <span class="bg-white text-orange-500 px-2 py-1 rounded-full text-[10px]">{{ $schedule['tag'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>\
    @endsection