<x-guest-layout>

    <div class="text-center mb-6">

        <h1 class="text-3xl font-bold text-gray-800">
            Ronaldo Quispe Tarqui
        </h1>

        <p class="text-gray-500 mt-2">
            Sistema de Login y Roles
        </p>

    </div>

    <!-- Session Status -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <!-- Usuario -->
        <div>

            <x-input-label
                for="user"
                :value="__('Usuario')"
            />

            <x-text-input
                id="user"
                class="block mt-1 w-full"
                type="text"
                name="user"
                :value="old('user')"
                required
                autofocus
            />

            <x-input-error
                :messages="$errors->get('user')"
                class="mt-2"
            />

        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-input-label
                for="password"
                :value="__('Contraseña')"
            />

            <x-text-input
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required
                autocomplete="current-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />

        </div>

        <div class="flex items-center justify-end mt-6">

            <x-primary-button>
                Iniciar Sesión
            </x-primary-button>

        </div>

    </form>

</x-guest-layout>