@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo de la Empresa" class="mx-auto mb-4" style="height: 60px;">
                <h3 class="text-2xl font-bold text-gray-800">Confirmar Contraseña</h3>
            </div>

            <div class="text-gray-700 mb-4">
                <p class="mb-4">Por favor, confirma tu contraseña antes de continuar.</p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input id="password" type="password" name="password" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm px-4 py-2 focus:ring-gray-400 focus:border-gray-400 @error('password') border-red-500 @enderror">
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                            class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Confirmar Contraseña
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <div class="mt-4 text-center">
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
