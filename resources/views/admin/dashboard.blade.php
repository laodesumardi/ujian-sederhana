<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6 sm:mb-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6 text-gray-900">
                        <div class="flex items-center">
                            <div class="p-2 sm:p-3 rounded-full bg-primary-100 text-primary-900 flex-shrink-0">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3 sm:ml-4 min-w-0">
                                <p class="text-xs sm:text-sm font-medium text-gray-600">Total Siswa</p>
                                <p class="text-lg sm:text-2xl font-bold text-primary-900">{{ $totalStudents }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6 text-gray-900">
                        <div class="flex items-center">
                            <div class="p-2 sm:p-3 rounded-full bg-primary-100 text-primary-900 flex-shrink-0">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3 sm:ml-4 min-w-0">
                                <p class="text-xs sm:text-sm font-medium text-gray-600">Total Soal</p>
                                <p class="text-lg sm:text-2xl font-bold text-primary-900">{{ $totalQuestions }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6 text-gray-900">
                        <div class="flex items-center">
                            <div class="p-2 sm:p-3 rounded-full bg-primary-100 text-primary-900 flex-shrink-0">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-3 sm:ml-4 min-w-0">
                                <p class="text-xs sm:text-sm font-medium text-gray-600">Total Ujian</p>
                                <p class="text-lg sm:text-2xl font-bold text-primary-900">{{ $totalExams }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6 text-gray-900">
                        <div class="flex items-center">
                            <div class="p-2 sm:p-3 rounded-full bg-primary-100 text-primary-900 flex-shrink-0">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div class="ml-3 sm:ml-4 min-w-0">
                                <p class="text-xs sm:text-sm font-medium text-gray-600">Rata-rata Nilai</p>
                                <p class="text-lg sm:text-2xl font-bold text-primary-900">{{ number_format($averageScore, 1) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6">
                        <div class="text-center">
                            <div class="p-3 sm:p-4 rounded-full bg-primary-100 text-primary-900 inline-block mb-3 sm:mb-4">
                                <svg class="w-8 h-8 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-2">Tambah Siswa</h3>
                            <p class="text-gray-600 mb-3 sm:mb-4 text-sm sm:text-base px-2 sm:px-0">Tambahkan siswa baru ke dalam sistem</p>
                            <a href="{{ route('admin.students.create') }}" class="inline-flex items-center px-3 sm:px-4 py-2 bg-primary-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-950 focus:bg-primary-950 active:bg-primary-950 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Tambah Siswa
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6">
                        <div class="text-center">
                            <div class="p-3 sm:p-4 rounded-full bg-primary-100 text-primary-900 inline-block mb-3 sm:mb-4">
                                <svg class="w-8 h-8 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-2">Tambah Soal</h3>
                            <p class="text-gray-600 mb-3 sm:mb-4 text-sm sm:text-base px-2 sm:px-0">Tambahkan soal ujian baru</p>
                            <a href="{{ route('admin.questions.create') }}" class="inline-flex items-center px-3 sm:px-4 py-2 bg-primary-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-950 focus:bg-primary-950 active:bg-primary-950 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Tambah Soal
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6">
                        <div class="text-center">
                            <div class="p-3 sm:p-4 rounded-full bg-primary-100 text-primary-900 inline-block mb-3 sm:mb-4">
                                <svg class="w-8 h-8 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-2">Lihat Nilai & Rata-rata</h3>
                            <p class="text-gray-600 mb-3 sm:mb-4 text-sm sm:text-base px-2 sm:px-0">Lihat hasil ujian dan statistik nilai</p>
                            <a href="{{ route('admin.scores') }}" class="inline-flex items-center px-3 sm:px-4 py-2 bg-primary-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-950 focus:bg-primary-950 active:bg-primary-950 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Lihat Nilai
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 sm:p-6">
                        <div class="text-center">
                            <div class="p-3 sm:p-4 rounded-full bg-green-100 text-green-900 inline-block mb-3 sm:mb-4">
                                <svg class="w-8 h-8 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-2">Pengaturan Ujian</h3>
                            <p class="text-gray-600 mb-3 sm:mb-4 text-sm sm:text-base px-2 sm:px-0">Atur waktu dan konfigurasi ujian</p>
                            <a href="{{ route('admin.exam-settings') }}" class="inline-flex items-center px-3 sm:px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Pengaturan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>