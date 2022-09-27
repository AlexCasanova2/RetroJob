<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Has olvidado la contraseña? Ningún problema. Introduce tu dirección de correo electrónico y te enviaremos un enlace para reiniciar la contraseña.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Correo electrónico')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-start mt-4">
                <x-primary-button class="w-full justify-center">
                    {{ __('Obtener una contraseña nueva') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
