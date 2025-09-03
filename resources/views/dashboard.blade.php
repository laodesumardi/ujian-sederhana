<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-3">
            <div class="bg-primary-600 p-2 rounded-lg">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
            </div>
            <h2 class="font-bold text-2xl text-gray-800">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl border border-primary-100 mb-8">
                <div class="p-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang, {{ Auth::user()->name }}!</h3>
                            <p class="text-gray-600 text-lg">Anda berhasil masuk ke sistem EduTest</p>
                        </div>
                        <div class="hidden md:block">
                            <div class="bg-primary-100 p-4 rounded-full">
                                <svg class="h-16 w-16 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Profile Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl border border-primary-100">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-lg">
                                <svg class="h-8 w-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-lg font-semibold text-gray-800">Profil Saya</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Kelola informasi profil dan pengaturan akun Anda</p>
                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition duration-200">
                            Lihat Profil
                        </a>
                    </div>
                </div>

                <!-- System Info Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl border border-primary-100">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-100 p-3 rounded-lg">
                                <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-lg font-semibold text-gray-800">Status Sistem</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Sistem berjalan dengan normal dan siap digunakan</p>
                        <div class="flex items-center text-green-600">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                            <span class="text-sm font-medium">Online</span>
                        </div>
                    </div>
                </div>

                <!-- Help Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl border border-primary-100">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-lg font-semibold text-gray-800">Bantuan</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Butuh bantuan? Hubungi administrator sistem</p>
                        <button class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200">
                            Hubungi Admin
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
