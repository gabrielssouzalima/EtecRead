@extends('layouts.app')
@section('title', 'Portal do Estudante')
    <!-- Header -->
    <header class="bg-white shadow-sm px-8 py-4 flex justify-between items-center">
        <div>
            <h1 class="text-xl font-bold flex items-center gap-2">
                <span class="text-red-600 text-2xl">📕</span> Biblioteca Digital
            </h1>
            <p class="text-sm text-gray-500">Centro Paula So uza - Sistema de Gestão de Livros</p>
        </div>
        <div class="text-right">
            <p class="font-medium text-gray-700">Portal do Estudante</p>
            <p class="text-sm text-gray-500">Catálogo de Livros</p>
        </div>
    </header>

    <!-- Estatísticas -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 px-8 py-6">
        <div class="bg-white border rounded-xl p-4 flex items-center gap-4 shadow-sm">
            <div class="text-red-500 text-3xl">📕</div>
            <div>
                <p class="text-gray-400 text-sm">Total de Livros</p>
                <h2 class="text-2xl font-semibold">0</h2>
            </div>
        </div>
        <div class="bg-white border rounded-xl p-4 flex items-center gap-4 shadow-sm">
            <div class="text-green-600 text-3xl">📗</div>
            <div>
                <p class="text-gray-400 text-sm">Disponíveis</p>
                <h2 class="text-2xl font-semibold">0</h2>
            </div>
        </div>
        <div class="bg-white border rounded-xl p-4 flex items-center gap-4 shadow-sm">
            <div class="text-yellow-500 text-3xl">🍵</div>
            <div>
                <p class="text-gray-400 text-sm">Resultados</p>
                <h2 class="text-2xl font-semibold">0</h2>
            </div>
        </div>
    </section>

    <!-- Barra de Pesquisa -->
    <section class="px-8">
        <div class="flex items-center gap-2 mb-6">
            <input type="text" placeholder="Pesquisar por título, autor ou categoria..."
                   class="flex-1 border rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500 outline-none">
            <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                🔍
            </button>
            <button class="border px-3 py-2 rounded-lg hover:bg-gray-100">
                ⚙️
            </button>
        </div>
    </section>

    <!-- Lista de Livros -->
    <section class="px-8 pb-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Card Disponível -->
        <div class="bg-white border rounded-xl p-6 shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="text-lg font-bold">Dom Casmurro</h3>
                <p class="text-sm text-gray-600 flex items-center gap-1 mt-1">👤 Machado de Assis</p>
                <p class="text-sm text-gray-600 flex items-center gap-1">📅 1899</p>
                <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full mt-3">Disponível</span>
                <span class="ml-2 inline-block border border-gray-300 text-gray-600 text-sm px-3 py-1 rounded-full">Literatura Brasileira</span>
                <p class="text-gray-700 mt-3 text-sm leading-relaxed">
                    Romance clássico da literatura brasileira que narra a história de Bentinho e sua suspeita sobre a traição de Capitu.
                </p>
                <p class="text-sm text-gray-600 mt-3">📘 ISBN: <span class="font-medium">978-85-359-0277-5</span></p>
                <p class="text-sm text-gray-700 mt-2">Exemplares: <span class="font-semibold text-green-600">3/5</span></p>
            </div>
            <button class="mt-4 bg-green-600 text-white w-full py-2 rounded-lg font-semibold hover:bg-green-700">
                📚 Emprestar
            </button>
        </div>

        <!-- Card Indisponível -->
        <div class="bg-white border rounded-xl p-6 shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="text-lg font-bold">Dom Casmurro</h3>
                <p class="text-sm text-gray-600 flex items-center gap-1 mt-1">👤 Machado de Assis</p>
                <p class="text-sm text-gray-600 flex items-center gap-1">📅 1899</p>
                <span class="inline-block bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full mt-3">Indisponível</span>
                <span class="ml-2 inline-block border border-gray-300 text-gray-600 text-sm px-3 py-1 rounded-full">Literatura Brasileira</span>
                <p class="text-gray-700 mt-3 text-sm leading-relaxed">
                    Romance clássico da literatura brasileira que narra a história de Bentinho e sua suspeita sobre a traição de Capitu.
                </p>
                <p class="text-sm text-gray-600 mt-3">📘 ISBN: <span class="font-medium">978-85-359-0277-5</span></p>
                <p class="text-sm text-gray-700 mt-2">Exemplares: <span class="font-semibold text-yellow-600">0/5</span></p>
            </div>
            <button class="mt-4 bg-yellow-500 text-white w-full py-2 rounded-lg font-semibold hover:bg-yellow-600">
                📕 Reservar
            </button>
        </div>

        <!-- Card Disponível -->
        <div class="bg-white border rounded-xl p-6 shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="text-lg font-bold">Dom Casmurro</h3>
                <p class="text-sm text-gray-600 flex items-center gap-1 mt-1">👤 Machado de Assis</p>
                <p class="text-sm text-gray-600 flex items-center gap-1">📅 1899</p>
                <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full mt-3">Disponível</span>
                <span class="ml-2 inline-block border border-gray-300 text-gray-600 text-sm px-3 py-1 rounded-full">Literatura Brasileira</span>
                <p class="text-gray-700 mt-3 text-sm leading-relaxed">
                    Romance clássico da literatura brasileira que narra a história de Bentinho e sua suspeita sobre a traição de Capitu.
                </p>
                <p class="text-sm text-gray-600 mt-3">📘 ISBN: <span class="font-medium">978-85-359-0277-5</span></p>
                <p class="text-sm text-gray-700 mt-2">Exemplares: <span class="font-semibold text-green-600">3/5</span></p>
            </div>
            <button class="mt-4 bg-green-600 text-white w-full py-2 rounded-lg font-semibold hover:bg-green-700">
                📚 Emprestar
            </button>
        </div>

    </section>

</body>
</html>
