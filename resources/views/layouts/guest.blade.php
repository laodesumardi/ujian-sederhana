<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>EduTest - Sistem Ujian Online</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gradient-to-br from-primary-50 to-primary-100">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <!-- Logo Section -->
            <div class="mb-8">
                <a href="/" class="flex items-center space-x-3">
                    <div class="bg-primary-600 p-3 rounded-lg">
                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">EduTest</h1>
                        <p class="text-sm text-gray-600">Sistem Ujian Online</p>
                    </div>
                </a>
            </div>

            <!-- Form Container -->
            <div class="w-full sm:max-w-md px-6 py-8 bg-white shadow-xl overflow-hidden sm:rounded-xl border border-primary-100">
                {{ $slot }}
            </div>
            
            <!-- Footer -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">&copy; 2024 EduTest. Semua hak dilindungi.</p>
            </div>
        </div>
    </body>
</html>
