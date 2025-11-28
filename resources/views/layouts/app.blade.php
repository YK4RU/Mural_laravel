<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Müral') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#FFFEF2] flex h-screen">

    <aside class="w-28 bg-[#FFF9BD] flex flex-col items-center py-8">
        <div class="fixed">
            <div class="text-3xl font-bold text-red-700 mb-8">Müral</div>
            <nav class="flex flex-col items-center space-y-10 mt-8">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('build/assets/imagens/casa.png') }}" alt="home" class="w-10 h-10">
                </a>
                <a href="#">
                    <img src="{{ asset('build/assets/imagens/mensagem.png') }}" alt="mensagem" class="w-10 h-10">
                </a>
                <a href="#">
                    <img src="{{ asset('build/assets/imagens/sino_notificacao.png') }}" alt="sino" class="w-10 h-10">
                </a>
                <a href="{{ route('profile.index') }}">
                    <img src="{{ asset('build/assets/imagens/perfil.png') }}" alt="perfil" class="w-10 h-10">
                </a>
                <div class="fixed bottom-10">
                    <img src="{{ asset('build/assets/imagens/flor.png') }}" alt="flor" class="w-10 h-10">
                </div>
            </nav>
        </div>
    </aside>

    <main class="flex-1 p-6 relative">
        <header class="flex justify-end mb-6">
            <div class="relative">
                <input type="text" placeholder="Pesquisar..." class="rounded-full border border-yellow-300 pl-4 pr-10 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <span class="absolute right-3 top-2.5 text-yellow-500">
                    <img src="{{ asset('build/assets/imagens/search.png') }}" alt="search" class="w-5 h-5">
                </span>
            </div>
        </header>
        <div>
            {{ $slot }}
        </div>
    </main>

</body>
</html>
