@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="relative w-full px-6 overflow-hidden">
        <!-- Carousel Items -->
        <div id="carouselItems" class="flex transition-transform duration-500">
            <div class="w-full flex-shrink-0 relative">
                <img src="{{ asset('images/slide1.jpg') }}" alt="Slide 1" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h5 class="text-xl font-bold">Bienvenido a Fast Package</h5>
                    <p>Tu solución rápida y confiable para envíos.</p>
                </div>
            </div>
            <div class="w-full flex-shrink-0 relative">
                <img src="{{ asset('images/slide2.jpg') }}" alt="Slide 2" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h5 class="text-xl font-bold">Envíos Internacionales</h5>
                    <p>Conectamos el mundo para ti.</p>
                </div>
            </div>
            <div class="w-full flex-shrink-0 relative">
                <img src="{{ asset('images/slide3.jpg') }}" alt="Slide 3" class="w-full h-64 md:h-80 lg:h-96 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h5 class="text-xl font-bold">Rápido y Seguro</h5>
                    <p>Confía en nosotros para tus entregas.</p>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button id="prevButton" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full z-10">
            &#10094;
        </button>
        <button id="nextButton" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full z-10">
            &#10095;
        </button>
    </div>

    <section class="mt-8 p-6">
        <h2 class="text-2xl font-bold">Sobre Nosotros</h2>
        <p class="mt-4">
            Fast Package es una empresa dedicada a ofrecer soluciones rápidas y confiables para tus necesidades de envío.
            Nos especializamos en envíos nacionales e internacionales, asegurando la mejor experiencia para nuestros clientes.
        </p>
    </section>

    <section class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-12 rounded-md">
        <div class="container mx-auto px-4 max-w-screen-lg">
            <h2 class="text-3xl font-bold text-center mb-8">Nuestra Misión y Visión</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Misión -->
                <div class="bg-white text-gray-800 rounded-lg shadow-lg p-6 flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Misión</h3>
                        <p>
                            Proveer soluciones de envío rápidas, seguras y confiables, superando las expectativas de nuestros clientes y conectando personas y negocios a nivel global.
                        </p>
                    </div>
                </div>
                <!-- Visión -->
                <div class="bg-white text-gray-800 rounded-lg shadow-lg p-6 flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m12 10h-7m4 4l-4-4m0 0l4-4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Visión</h3>
                        <p>
                            Ser la empresa líder en servicios de envío, reconocida por nuestra innovación, excelencia operativa y compromiso con la satisfacción del cliente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-screen-lg">
            <h2 class="text-3xl font-bold text-center mb-8">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Servicio 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m12 10h-7m4 4l-4-4m0 0l4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Envíos Nacionales</h3>
                    <p class="text-gray-700">
                        Ofrecemos envíos rápidos y seguros a cualquier parte del país, garantizando la entrega a tiempo.
                    </p>
                </div>
                <!-- Servicio 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Envíos Internacionales</h3>
                    <p class="text-gray-700">
                        Conectamos personas y negocios a nivel global con nuestros servicios de envío internacional.
                    </p>
                </div>
                <!-- Servicio 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 0c-4.418 0-8 1.79-8 4v1h16v-1c0-2.21-3.582-4-8-4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Seguimiento en Tiempo Real</h3>
                    <p class="text-gray-700">
                        Rastrea tus envíos en tiempo real con nuestra plataforma avanzada de seguimiento.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-screen-lg">
            <h2 class="text-3xl font-bold text-center mb-8">Contáctanos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mapa -->
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.123456789!2d-78.485123!3d-0.180123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a6e12345678%3A0x123456789abcdef!2sLa%20Carolina%2C%20Quito%2C%20Ecuador!5e0!3m2!1ses!2sec!4v1234567890"
                        width="100%"
                        height="400"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Información de Contacto</h3>
                    <p class="text-gray-700 mb-2">
                        <strong>Teléfono:</strong>
                        <span id="phone" class="cursor-pointer text-blue-500 hover:underline" onclick="copyToClipboard('+593958696728')">
                            +593 95 869 6728
                        </span>
                        <span id="phoneCopied" class="text-green-500 hidden">¡Copiado!</span>
                    </p>
                    <p class="text-gray-700 mb-2">
                        <strong>Correo Electrónico:</strong>
                        <a href="mailto:contacto@fastpackage.com" class="text-blue-500 hover:underline">
                            contacto@fastpackage.com
                        </a>
                    </p>
                    <p class="text-gray-700">
                        <strong>Dirección:</strong> La Carolina, Quito, Ecuador
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-white py-12">
        <div class="container mx-auto px-4 max-w-screen-lg">
            <h2 class="text-3xl font-bold text-center mb-8">Envíanos un Mensaje</h2>
            <div class="bg-gray-100 rounded-lg shadow-lg p-6">
                @if (session('success'))
                    <div class="mb-4 p-4 text-green-800 bg-green-100 border border-green-300 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 p-4 text-red-800 bg-red-100 border border-red-300 rounded">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}#contact" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
