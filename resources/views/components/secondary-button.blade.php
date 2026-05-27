<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'inline-flex items-center px-4 py-2 bg-white border border-green-300 rounded-2xl font-semibold text-xs text-green-700 uppercase tracking-widest shadow-sm hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 disabled:opacity-25 transition-all duration-150'
]) }}>
    {{ $slot }}
</button>