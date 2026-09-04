<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Tags Dinamici -->
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    @if(isset($description))
        <meta name="description" content="{{ $description }}">
    @endif
    @if(isset($keywords))
        <meta name="keywords" content="{{ $keywords }}">
    @endif

    <!-- Open Graph Meta Tags -->
    @if(isset($og_image))
        <meta property="og:image" content="{{ $og_image }}">
    @endif
    <meta property="og:title" content="{{ $title ?? config('app.name', 'Laravel') }}">
    @if(isset($description))
        <meta property="og:description" content="{{ $description }}">
    @endif
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">

    <!-- Canonical URL -->
    @if(isset($canonical))
        <link rel="canonical" href="{{ $canonical }}">
    @else
        <link rel="canonical" href="{{ request()->url() }}">
    @endif

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @livewireStyles
    @filamentStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'],'themes/Zero')
    
    <!-- Custom Styles -->
    @stack('styles')
</head>
<body class="h-full font-sans antialiased bg-gray-50">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-blue-600 text-white px-4 py-2 rounded-md z-50">
        {{ __('Skip to main content') }}
    </a>

    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        @if(isset($header))
            {{ $header }}
        @else
            <x-navigation />
        @endif
    </header>

    <!-- Main Content -->
    <main id="main-content" class="flex-1">
        @if(isset($slot))
            {{ $slot }}
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-auto">
        @if(isset($footer))
            {{ $footer }}
        @endif
    </footer>

    <!-- Scripts -->
    @livewireScriptConfig
    @filamentScripts
    @vite(['resources/js/app.js'], 'themes/Zero')
    @stack('scripts')
</body>
</html>
