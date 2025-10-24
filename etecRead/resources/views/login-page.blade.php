@extends('layouts.app')

@section('title', 'Login - EtecRead')w

@section('content')
<div class="min-h-screen bg-white flex items-center justify-center">
    <div class="flex bg-white rounded-2xl shadow-lg overflow-hidden max-w-4xl w-full mx-4">
        
        {{-- Lado Esquerdo --}}
        <div class="bg-red-700 text-white w-1/2 p-10 flex flex-col justify-center rounded-r-[3rem]">
            <img src="{{ asset('images/etec-read-logo.png') }}" alt="EtecRead Logo" class="w-40 h-70">
            <p class="text-lg mb-6"> 
                Sistema de Gestão da Biblioteca <br>Centro Paula Souza
            </p>

            <ul class="space-y-2">
                <li class="flex items-center">
                    <img src="{{ asset('images/book-icon.png') }}" alt="Livro" class="w-5 h-5 mr-2">
                    Reserva de livros online
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/book-icon.png') }}" alt="Livro" class="w-5 h-5 mr-2">
                    Controle de empréstimos
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/book-icon.png') }}" alt="Livro" class="w-5 h-5 mr-2">
                    Catálogo digital completo
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/book-icon.png') }}" alt="Livro" class="w-5 h-5 mr-2">
                    Histórico de leituras
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/book-icon.png') }}" alt="Livro" class="w-5 h-5 mr-2">
                    Renovações automáticas
                </li>
            </ul>
            
        </div>

        {{-- Lado Direito --}}
        <div class="w-1/2 p-10 flex flex-col justify-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Acesse sua conta</h2>
            <p class="text-gray-500 mb-6">Entre com suas credenciais para continuar</p>

            {{-- Abas (Email / RA) --}}
            <div x-data="{ tab: 'email' }" class="mb-6">
                <div class="flex space-x-2">
                    <button 
                        @click="tab = 'email'"
                        :class="tab === 'email' ? 'border-red-500 text-red-600' : 'border-gray-300 text-gray-500'"
                        class="w-1/2 border py-2 rounded-md font-medium transition">
                        📧 E-mail
                    </button>
                    <button 
                        @click="tab = 'ra'"
                        :class="tab === 'ra' ? 'border-red-500 text-red-600' : 'border-gray-300 text-gray-500'"
                        class="w-1/2 border py-2 rounded-md font-medium transition">
                        🎓 RA
                    </button>
                </div>

                {{-- Formulário de Login --}}
                <form method="POST" action="#" class="space-y-4 mt-6">
                    @csrf

                    {{-- Campo de E-mail --}}
                    <div x-show="tab === 'email'">
                        <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus 
                            class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" 
                            placeholder="seu@email.com">
                    </div>

                    {{-- Campo de RA --}}
                    <div x-show="tab === 'ra'">
                        <label for="ra" class="block text-sm font-medium text-gray-700">RA</label>
                        <input 
                            id="ra" 
                            name="ra" 
                            type="text" 
                            class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" 
                            placeholder="Digite seu RA">
                    </div>

                    {{-- Campo de Senha --}}
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            required 
                            class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" 
                            placeholder="Digite sua senha">
                    </div>

                    {{-- Botão --}}
                    <button 
                        type="submit" 
                        class="w-full bg-red-600 text-white py-3 rounded-md font-semibold hover:bg-red-700 transition">
                        Entrar na Biblioteca
                    </button>

                    <p class="text-center text-gray-600 text-sm mt-4">
                        Não tem uma conta?
                        <a href="#" class="text-red-600 font-semibold hover:underline">
                            Cadastre-se aqui
                        </a> 
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
