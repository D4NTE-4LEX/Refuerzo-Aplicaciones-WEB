@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo de la Empresa" class="mx-auto mb-4" style="height: 60px;">
                <h3 class="text-2xl font-bold text-gray-800">Verifica tu Dirección de Correo</h3>
            </div>

            <div class="text-gray-700 mb-4">
                @if (session('resent'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
                    </div>
                @endif

                <p class="mb-4">Antes de continuar, revisa tu correo electrónico para encontrar el enlace de verificación.</p>
                <p class="mb-4">Si no recibiste el correo, puedes solicitar otro haciendo clic en el botón de abajo.</p>
            </div>

            <form method="POST" action="{{ route('verification.resend') }}" class="text-center">
                @csrf
                <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Reenviar Enlace de Verificación
                </button>
            </form>
        </div>
    </div>
@endsection
