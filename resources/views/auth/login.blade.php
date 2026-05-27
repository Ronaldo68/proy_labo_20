<x-guest-layout>

    {{-- Encabezado con ícono --}}
    <div class="text-center mb-8">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z"/>
            </svg>
        </div>
        <h1 class="text-xl font-semibold text-green-700">
            Ronaldo Quispe Tarqui
        </h1>
        <p class="text-sm text-gray-500 mt-1">
            Sistema de Login y Roles
        </p>
    </div>

    {{-- Estado de sesión --}}
    <x-auth-session-status class="mb-4 text-green-600 text-sm text-center" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        {{-- Usuario --}}
        <div>
            <label for="user" class="block text-xs font-semibold text-gray-500 uppercase tracking-widest mb-1">
                Usuario
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </span>
                <x-text-input
                    id="user"
                    name="user"
                    type="text"
                    class="block w-full pl-10 rounded-xl border-green-200 bg-green-50 focus:border-green-500 focus:ring-green-500 text-sm transition"
                    :value="old('user')"
                    required
                    autofocus
                    placeholder="Tu usuario"
                />
            </div>
            <x-input-error :messages="$errors->get('user')" class="mt-1 text-xs" />
        </div>

        {{-- Contraseña --}}
        <div>
            <label for="password" class="block text-xs font-semibold text-gray-500 uppercase tracking-widest mb-1">
                Contraseña
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </span>
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full pl-10 rounded-xl border-green-200 bg-green-50 focus:border-green-500 focus:ring-green-500 text-sm transition"
                    required
                    autocomplete="current-password"
                    placeholder="Tu contraseña"
                />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
        </div>

        {{-- Botón ingresar --}}
        <div class="pt-2">
            <button type="submit"
                class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-green-700 hover:bg-green-800 text-white font-semibold text-sm rounded-full shadow-md hover:shadow-lg transition-all duration-200 active:scale-95">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                </svg>
                Ingresar al Sistema
            </button>
        </div>

        {{-- Enlace olvidé contraseña --}}
        @if (Route::has('password.request'))
            <div class="text-center">
                <a href="{{ route('password.request') }}"
                   class="text-xs text-green-600 hover:text-green-800 hover:underline transition">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>
        @endif

    </form>

</x-guest-layout>