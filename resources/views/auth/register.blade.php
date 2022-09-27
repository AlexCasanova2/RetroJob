<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
            Regístrate
        </h1>

        <form method="POST" action="{{ route('register') }}" novalidate class="space-y-4 md:space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nombre')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Correo electrónico')" />

                <x-text-input id="email" class="block mt-1 w-full " type="email" name="email" :value="old('email')" required />
            </div>

            <!-- User Type -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('¿Qué buscas?')" />

                <select id="rol" name="rol" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'">
                    <option value="1">Usuario - Obtener trabajo</option>
                    <option value="2">Empresa - Publicar trabajo</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-start mt-4">
                <x-primary-button class="w-full justify-center">
                    {{ __('Regístrate') }}
                </x-primary-button>
            </div>
            <div class="flex items-center justify-start mt-4 ">
                <span class="text-sm">¿Ya tienes cuenta? </span>
                <x-link
                    :href="route('login')"
                    class="ml-2">
                    Iniciar sesión
                </x-link>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
