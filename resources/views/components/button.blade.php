<button {{ $attributes->merge(['class' => 'bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition']) }}>
    {{ $slot }}
</button>
