<x-guest-layout>
    <!-- Header -->
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Masuk ke Akun Anda</h2>
        <p class="text-gray-600">Silakan masukkan email dan password untuk melanjutkan</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-medium" />
            <x-text-input id="email" 
                class="block mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
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
                autocomplete="current-password" 
                placeholder="Masukkan password Anda" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" 
                type="checkbox" 
                class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded" 
                name="remember">
            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                {{ __('Ingat saya') }}
            </label>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" 
                class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                {{ __('Masuk') }}
            </button>
        </div>

        <!-- Links -->
        <div class="text-center space-y-3">
            @if (Route::has('password.request'))
                <div>
                    <a class="text-sm text-primary-600 hover:text-primary-700 font-medium" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                </div>
            @endif
            
            <div class="text-sm text-gray-600">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-primary-600 hover:text-primary-700 font-medium">
                    Daftar sekarang
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
