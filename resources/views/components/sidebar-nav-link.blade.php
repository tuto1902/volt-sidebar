@props(['icon', 'active'])

@php
$active = ($active ?? false);
$icon = ($icon ?? false);
@endphp
<li>
    <a {{ $attributes->class([
        'flex items-center gap-x-3.5 py-2 px-2.5 my-2 mr-2 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:hover:bg-slate-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600',
        'cursor-pointer bg-gray-100 dark:bg-gray-900 dark:text-white' => $active,
        'dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300' => !$active    
    ])}}>
        @if($icon)
            @svg($icon, 'flex-shrink-0 size-4')
        @endif
        {{ $slot }}
    </a>
</li>