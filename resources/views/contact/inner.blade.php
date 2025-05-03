@extends('main')
@extends('layouts.app')

@section('title', 'contact')
@section('hero')


<section class="py-10 px-4 max-w-5xl mx-auto pt-20 md:pt-24">
    <h2 class="text-center text-2xl font-bold border-b pb-2">
      {{ $translator->translate('TRANSFORMASI BAKOEL IDE') }}
    </h2>
  
    <!-- 2023 -->
    <div class="bg-orange-500 text-white text-xl font-bold text-center py-2 mt-8">
      {{ $translator->translate('2023') }}
    </div>
    <div class="flex flex-col md:flex-row items-start gap-4 mt-4">
      <div class="w-20 h-20 flex-shrink-0">
        <i class="text-6xl text-orange-500 fa-regular fa-lightbulb" ></i>
      </div>
      <div>
        <h3 class="text-lg font-bold">{{ $translator->translate('INSPIRASI') }}</h3>
        <p>{{ $translator->translate('Awal mula Bakoel Ide') }}</p>
      </div>
    </div>
  
    <!-- 2024 - Perekruan Tim -->
    <div class="bg-red-500 text-white text-xl font-bold text-center py-2 mt-10">
      {{ $translator->translate('2024') }}
    </div>
    <div class="flex flex-col md:flex-row items-start gap-4 mt-4">
      <div class="w-20 h-20 flex-shrink-0">
        <i class="text-6xl text-red-500 fa-solid fa-users" ></i>
      </div>
      <div>
        <h3 class="text-lg font-bold">{{ $translator->translate('PEREKRUTAN TIM') }}</h3>
        <p>{{ $translator->translate('Perekrutan tim diawali dengan') }}</p>
      </div>
    </div>
  
    <!-- 2024 - Cerita Awal -->
    <div class="bg-cyan-400 text-white text-xl font-bold text-center py-2 mt-10">
      {{ $translator->translate('2024') }}
    </div>
    <div class="flex flex-col md:flex-row items-start gap-4 mt-4">
      <div class="w-20 h-20 flex-shrink-0">
        <i class="text-6xl text-cyan-400 fa-solid fa-desktop" ></i>
      </div>
      <div>
        <h3 class="text-lg font-bold">{{ $translator->translate('CERITA AWAL') }}</h3>
        <p>{{ $translator->translate('Cerita ini bermula dari') }}</p>
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
      <img src="https://blog-static.mamikos.com/wp-content/uploads/2022/07/5-Cara-Membangun-Tim-Kerja-yang-Efektif-dan-Produktif.jpg" class="rounded shadow" alt="team">
      <img src="https://blog-static.mamikos.com/wp-content/uploads/2022/07/5-Cara-Membangun-Tim-Kerja-yang-Efektif-dan-Produktif.jpg    " class="rounded shadow" alt="team">
      <img src="https://blog-static.mamikos.com/wp-content/uploads/2022/07/5-Cara-Membangun-Tim-Kerja-yang-Efektif-dan-Produktif.jpg" class="rounded shadow" alt="team">
    </div>
  
    <!-- 2025 -->
    <div class="bg-green-600 text-white text-xl font-bold text-center py-2 mt-10">
      {{ $translator->translate('2025') }}
    </div>
    <div class="flex flex-col md:flex-row items-start gap-4 mt-4">
      <div class="w-20 h-20 flex-shrink-0">
        <i class="text-6xl text-green-600 fa-regular fa-handshake" ></i>
      </div>
      <div>
        <h3 class="text-lg font-bold">{{ $translator->translate('LAYANAN') }}</h3>
        <p>{{ $translator->translate('Layanan kami ada beberapa antaranya') }}</p>
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
      <img src="https://ashsconsultants.com/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-01-at-12.17.28-PM.jpeg" class="rounded shadow" alt="layanan1">
      <img src="https://ashsconsultants.com/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-01-at-12.17.28-PM.jpeg" class="rounded shadow" alt="layanan2">
      <img src="https://ashsconsultants.com/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-01-at-12.17.28-PM.jpeg" class="rounded shadow" alt="layanan3">
    </div>
  </section>
@endsection


<script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.js"></script>
</script>