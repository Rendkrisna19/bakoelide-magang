@extends('main')
@section('title', 'templates')

@extends('layouts.app')
@section('content') 
<section class="h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('{{ asset('assets/images/HeroSectionTemplate.png') }}');">
    <div class=" p-8 rounded-lg max-w-2xl mx-auto">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">Jelajahi Semua Template</h1>
    </div>
  </section>
<div class="max-w-6xl mx-auto px-4 py-8 pt-20 md:pt-24">
    {{-- Tabs --}}
    <div class="flex space-x-4 border-b border-orange-500 pb-2">
        <button onclick="showCategory('all', this)" class="tab-btn px-4 py-2 text-orange-500 border border-orange-500 rounded">All</button>
        <button onclick="showCategory('terbaru', this)" class="tab-btn px-4 py-2 text-white bg-orange-500 rounded">Terbaru</button>
        <button onclick="showCategory('feeds', this)" class="tab-btn px-4 py-2 text-orange-500 border border-orange-500 rounded">IG Feeds</button>
        <button onclick="showCategory('story', this)" class="tab-btn px-4 py-2 text-orange-500 border border-orange-500 rounded">IG Story</button>
        <button onclick="showCategory('tiktok', this)" class="tab-btn px-4 py-2 text-orange-500 border border-orange-500 rounded">Tiktok Video</button>
    </div>

    {{-- Desain Terbaru --}}
    <div id="terbaru" class="category-section mt-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Desain Terbaru</h2>
            <a href="/desain-terbaru" class="border px-4 py-1 rounded-full text-sm">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <img src="{{ asset('assets/images/template1.png') }}" alt="" class="rounded shadow">
            <img src="{{ asset('assets/images/template1.png') }}" alt="" class="rounded shadow">
            <img src="{{ asset('assets/images/template1.png') }}" alt="" class="rounded shadow">
        </div>
    </div>

    {{-- Instagram Feeds --}}
    <div id="feeds" class="category-section mt-8 hidden">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Instagram Feeds</h2>
            <a href="/instagram-feeds" class="border px-4 py-1 rounded-full text-sm">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <img src="{{ asset('assets/images/template1.png') }}" alt="" class="rounded shadow">
            <img src="{{ asset('assets/images/template1.png') }}" alt="" class="rounded shadow">
            <img src="{{ asset('assets/images/template1.png') }}" alt="" class="rounded shadow">
        </div>
    </div>

    {{-- Instagram Story --}}
    <div id="story" class="category-section mt-8 hidden">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Instagram Story</h2>
            <a href="/instagram-story" class="border px-4 py-1 rounded-full text-sm">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Story Thumbnail 1" class="rounded shadow">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Story Thumbnail 2" class="rounded shadow">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Story Thumbnail 3" class="rounded shadow">
        </div>
    </div>

    {{-- Video Tiktok --}}
    <div id="tiktok" class="category-section mt-8 hidden">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Video Tiktok</h2>
            <a href="/video-tiktok" class="border px-4 py-1 rounded-full text-sm">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Tiktok Thumbnail 1" class="rounded shadow">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Tiktok Thumbnail 2" class="rounded shadow">
            <img src="{{ asset('assets/images/template1.png') }}" alt="Tiktok Thumbnail 3" class="rounded shadow">
        </div>
    </div>
</div>

{{-- JS Category Tab --}}
<script>
    function showCategory(id, el) {
        const sections = document.querySelectorAll('.category-section');
        const tabs = document.querySelectorAll('.tab-btn');

        // Reset all sections
        sections.forEach(section => {
            if (id === 'all') {
                section.classList.remove('hidden');
            } else {
                section.id === id ? section.classList.remove('hidden') : section.classList.add('hidden');
            }
        });

        // Reset tab styles
        tabs.forEach(tab => {
            tab.classList.remove('bg-orange-500', 'text-white');
            tab.classList.add('text-orange-500', 'border', 'border-orange-500');
        });

        // Active tab style
        el.classList.add('bg-orange-500', 'text-white');
        el.classList.remove('text-orange-500', 'border', 'border-orange-500');
    }
</script>
@endsection
