<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem Ujian Online</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="min-h-screen">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <!-- Navigation -->
                    <nav class="flex items-center justify-between p-4 md:p-6">
                        <div class="flex items-center space-x-3">
                            <div class="bg-primary-600 p-2 rounded-lg">
                                <svg class="h-6 w-6 md:h-8 md:w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-xl md:text-2xl font-bold text-gray-800">EduTest</h1>
                                <p class="text-xs md:text-sm text-gray-600">Sistem Ujian Online</p>
                            </div>
                        </div>

                        @if (Route::has('login'))
                            <div class="flex items-center space-x-2 md:space-x-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-3 py-2 md:px-6 md:py-2 rounded-lg font-medium transition duration-200 text-sm md:text-base">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-primary-600 px-2 py-2 md:px-4 md:py-2 rounded-lg font-medium transition duration-200 text-sm md:text-base">
                                        Masuk
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-3 py-2 md:px-6 md:py-2 rounded-lg font-medium transition duration-200 text-sm md:text-base">
                                            Daftar
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </nav>

                    <!-- Hero Section -->
                    <main class="flex-1 flex items-center justify-center px-4 md:px-6 py-8 md:py-12">
                        <div class="max-w-4xl mx-auto text-center">
                            <div class="mb-6 md:mb-8">
                                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-4 md:mb-6">
                                    Sistem Ujian Online
                                    <span class="text-primary-600 block sm:inline">Terpercaya</span>
                                </h1>
                                <p class="text-base md:text-xl text-gray-600 mb-6 md:mb-8 max-w-2xl mx-auto leading-relaxed">
                                    Platform ujian online yang aman,mudah di gunakan dan dapat diandalkan untuk institusi pendidikan modern.
                                </p>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center mb-8 md:mb-12 px-4">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 md:px-8 md:py-4 rounded-lg font-semibold text-base md:text-lg transition duration-200 shadow-lg">
                                            Masuk ke Dashboard
                                        </a>
                                    @else
                                        <a href="{{ route('register') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 md:px-8 md:py-4 rounded-lg font-semibold text-base md:text-lg transition duration-200 shadow-lg">
                                            Mulai Sekarang
                                        </a>
                                        <a href="{{ route('login') }}" class="border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white px-6 py-3 md:px-8 md:py-4 rounded-lg font-semibold text-base md:text-lg transition duration-200">
                                            Masuk
                                        </a>
                                    @endauth
                                @endif
                            </div>

                            <!-- Features Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mt-12 md:mt-16 px-4 md:px-0">
                                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                                    <div class="bg-primary-100 w-12 h-12 md:w-16 md:h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-6 h-6 md:w-8 md:h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-2 text-center">Aman & Terpercaya</h3>
                                    <p class="text-sm md:text-base text-gray-600 text-center">Sistem keamanan berlapis untuk menjamin integritas ujian dan mencegah kecurangan.</p>
                                </div>

                                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                                    <div class="bg-primary-200 w-12 h-12 md:w-16 md:h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-6 h-6 md:w-8 md:h-8 text-primary-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-2 text-center">Cepat & Responsif</h3>
                                    <p class="text-sm md:text-base text-gray-600 text-center">Interface yang cepat dan responsif untuk pengalaman ujian yang lancar di semua perangkat.</p>
                                </div>

                                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                                    <div class="bg-primary-300 w-12 h-12 md:w-16 md:h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-6 h-6 md:w-8 md:h-8 text-primary-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-2 text-center">Analisis Mendalam</h3>
                                    <p class="text-sm md:text-base text-gray-600 text-center">Laporan dan analisis hasil ujian yang komprehensif untuk evaluasi pembelajaran.</p>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-primary-900 text-white py-8 w-full">
                <div class="container mx-auto px-6 text-center">
                    <p>&copy; 2024 EduTest. Semua hak dilindungi.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
