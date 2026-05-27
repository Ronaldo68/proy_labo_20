<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center justify-center w-full px-4 py-3 bg-gradient-to-r from-green-600 to-emerald-500 border border-transparent rounded-2xl font-semibold text-sm text-white uppercase tracking-widest shadow-md hover:shadow-xl hover:from-green-700 hover:to-emerald-600 active:scale-[0.98] focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 transition-all duration-200'
]) }}>
    {{ $slot }}
</button>