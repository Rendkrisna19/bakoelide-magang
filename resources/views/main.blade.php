<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bakoel Ide | @yield('title')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}?v={{ time() }}">
    @php
        // Pastikan $translator tersedia di semua halaman
        $translator = $translator ?? new \Stichoza\GoogleTranslate\GoogleTranslate(app()->getLocale());
    @endphp
</head>

<body>
    <a href="https://wa.me/6281234567890" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </a>

    {{-- navbar --}}
    @include('navbar.navbar')

    @yield('hero')

    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    @if (View::hasSection('hide_footer'))
    @else
        @include('footer.footer')
    @endif

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    @stack('script')
</body>

</html>
