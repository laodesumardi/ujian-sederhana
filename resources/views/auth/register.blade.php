<x-guest-layout>
    <!-- Header -->
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Daftar Akun Baru</h2>
        <p class="text-gray-600">Silakan lengkapi data berikut untuk membuat akun</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" class="text-gray-700 font-medium" />
            <x-text-input id="name" 
                class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200" 
                type="text" 
                name="name" 
                :value="old('name')" 
                required 
                autofocus 
                autocomplete="name" 
                placeholder="Masukkan nama lengkap Anda" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />
            <x-text-input id="email" 
                class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autocomplete="username" 
                placeholder="Masukkan email Anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
            <x-text-input id="password" 
                class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200"
                type="password"
                name="password"
                required 
                autocomplete="new-password" 
                placeholder="Masukkan password Anda" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="text-gray-700 font-medium" />
            <x-text-input id="password_confirmation" 
                class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200"
                type="password"
                name="password_confirmation" 
                required 
                autocomplete="new-password" 
                placeholder="Ulangi password Anda" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" 
                class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                {{ __('Daftar') }}
            </button>
        </div>

        <!-- Links -->
        <div class="text-center">
            <div class="text-sm text-gray-600">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-700 font-medium">
                    Masuk sekarang
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
