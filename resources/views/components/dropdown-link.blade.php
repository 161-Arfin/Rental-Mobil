<a {{ $attributes->merge([
    'class' => '
        block w-full px-4 py-2 text-start text-sm 
        text-gray-200 hover:text-white 
        hover:bg-blue-600/30 
        rounded-md transition-all duration-200 ease-in-out
    '
]) }}>
    {{ $slot }}
</a>
