<x-guest-layout>

    {{-- Encabezado --}}
    <div class="text-center mb-6">
        <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
            </svg>
        </div>
        <h2 class="text-lg font-semibold text-green-700">¿Olvidaste tu contraseña?</h2>
        <p class="text-sm text-gray-500 mt-1">
            Ingresa tu correo y te enviaremos un enlace para restablecerla.
        </p>
    </div>

    {{-- Estado de sesión --}}
    <x-auth-session-status class="mb-4 text-green-600 text-sm text-center" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        {{-- Correo --}}
        <div>
            <label for="email" class="block text-xs font-semibold text-gray-500 uppercase tracking-widest mb-1">
                Correo Electrónico
            </label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </span>
                <x-text-input
                    id="email"
                    name="email"
                    type="email"
                    class="block w-full pl-10 rounded-xl border-green-200 bg-green-50 focus:border-green-500 focus:ring-green-500 text-sm transition"
                    :value="old('email')"
                    required
                    autofocus
                    placeholder="tu@correo.com"
                />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        {{-- Botones --}}
        <div class="flex flex-col gap-3 pt-2">
            <button type="submit"
                class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-green-700 hover:bg-green-800 text-white font-semibold text-sm rounded-full shadow-md hover:shadow-lg transition-all duration-200 active:scale-95">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Enviar enlace de recuperación
            </button>

            <a href="{{ route('login') }}"
                class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-white hover:bg-gray-50 text-gray-600 hover:text-gray-800 font-semibold text-sm rounded-full border border-gray-200 transition-all duration-200 active:scale-95">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Cancelar
            </a>
        </div>

    </form>

</x-guest-layout>