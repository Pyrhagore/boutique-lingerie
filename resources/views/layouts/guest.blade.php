<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lesly Corporate - Boutique de Lingerie</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-rose-100 via-white to-rose-200 min-h-screen flex items-center justify-center font-sans antialiased">

    <div class="w-full max-w-md p-10 space-y-8 bg-white/80 backdrop-blur-md shadow-2xl rounded-3xl border border-rose-200">
        <div class="flex flex-col items-center">
            <a href="/">
                <x-application-logo class="w-24 h-24 text-rose-400" />
            </a>
            <h2 class="mt-6 text-3xl font-bold text-gray-800 text-center">
                Bienvenue chez Lesly Corporate
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
                Découvrez la beauté, l'élégance et la douceur.
            </p>
        </div>

        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
