@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo de la Empresa" class="mx-auto mb-4" style="height: 60px;">
                <h3 class="text-2xl font-bold text-gray-800">Fast Package</h3>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm px-4 py-2 focus:ring-gray-400 focus:border-gray-400 @error('email') border-red-500 @enderror">
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input id="password" type="password" name="password" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm px-4 py-2 focus:ring-gray-400 focus:border-gray-400 @error('password') border-red-500 @enderror">
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-500 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-700">Recuérdame</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
                </div>

                <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Iniciar Sesión
                </button>
            </form>

            <div class="mt-4 text-center">
                <p class="text-sm text-gray-700">
                    ¿No tienes una cuenta? <br>
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Regístrate aquí</a>.
                </p>
            </div>
        </div>
    </div>
@endsection
