@props(['label', 'for'])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <label for="{{ $for }}" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">
        {{ $label }}
    </label>
    {{ $slot }}
</div>
