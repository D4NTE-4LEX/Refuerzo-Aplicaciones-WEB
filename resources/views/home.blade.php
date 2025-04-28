@extends('layouts.dashboard')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold text-center mb-6 text-blue-500">Gestión de Paquetes</h1>
        <div class="flex flex-col justify-between sm:flex-row items-center mb-4">
            <p class="text-blue-600 text-xs sm:text-sm">Administra tus paquetes de forma sencilla.</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600"
                    onclick="document.getElementById('createPackageModal').classList.remove('hidden')">
                Crear Paquete
            </button>
        </div>

        @if (session('success'))
            <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="overflow-x-auto">
            <table class="w-full border border-blue-300 rounded-lg text-xs sm:text-sm">
                <thead>
                <tr>
                    <th class="px-4 py-2 bg-blue-500 text-white">ID</th>
                    <th class="px-4 py-2 bg-blue-400 text-white">Nombre</th>
                    <th class="px-4 py-2 bg-blue-500 text-white">Peso (lb)</th>
                    <th class="px-4 py-2 bg-blue-400 text-white">Dimensiones</th>
                    <th class="px-4 py-2 bg-blue-500 text-white">Estado</th>
                    <th class="px-4 py-2 bg-blue-400 text-white">Usuario</th>
                    <th class="px-4 py-2 bg-blue-500 text-white text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($paquetes as $paquete)
                    <tr class="odd:bg-blue-50 even:bg-blue-100 hover:bg-blue-200">
                        <td class="border px-4 py-2">{{ $paquete->id }}</td>
                        <td class="border px-4 py-2">{{ $paquete->nombre }}</td>
                        <td class="border px-4 py-2">{{ $paquete->peso }}</td>
                        <td class="border px-4 py-2">{{ $paquete->dimensiones }}</td>
                        <td class="border px-4 py-2">
                    <span class="px-2 py-1 rounded-lg text-white
                        {{ $paquete->estado === 'pendiente' ? 'bg-blue-300' : ($paquete->estado === 'enviado' ? 'bg-blue-400' : 'bg-blue-600') }}">
                        {{ ucfirst($paquete->estado) }}
                    </span>
                        </td>
                        <td class="border px-4 py-2">{{ $paquete->usuario->name }}</td>
                        <td class="border px-4 py-2 text-center">
                            <button class="bg-blue-400 text-white px-2 py-1 rounded-lg hover:bg-blue-500"
                                    onclick="openEditModal({{ $paquete }})">
                                Editar
                            </button>
                            <form action="{{ route('paquetes.destroy', $paquete) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg hover:bg-blue-700">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

    @include('modals.edit-package-modal')

    @include('modals.create-package-modal')
@endsection
