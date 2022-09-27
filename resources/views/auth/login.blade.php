<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
            Iniciar sesión
        </h1>
        <form method="POST" action="{{ route('login') }}" novalidate class="space-y-4 md:space-y-6">
            @csrf
            
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Correo electrónico')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Constraseña')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex mt-4 justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                </label>
                <x-link
                    :href="route('password.request')">
                    He olvidado mi contraseña
                </x-link>
            </div>

            <div class="flex items-center justify-start mt-4">
                <x-primary-button class="w-full justify-center">
                    {{ __('Iniciar sesión') }}
                </x-primary-button>
            </div>
            <div class="flex items-center justify-start mt-4">
                <span class="text-sm">Todavía no tienes cuenta?</span>
                <x-link
                    :href="route('register')"
                    class="ml-2">
                    Crear cuenta
                </x-link>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
