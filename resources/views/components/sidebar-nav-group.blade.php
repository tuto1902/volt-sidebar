@props(['label', 'icon', 'active'])

@php

$icon = ($icon ?? false);

@endphp

<li x-data="{expanded: {{ ($active ?? false) ? 'true' : 'false' }} }">
    <button type="button"
        @click="expanded = !expanded"
        :class="{ 'text-blue-600 dark:text-white': expanded }"
        class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-0"
    >
        @if($icon)
            @svg($icon, 'flex-shrink-0 size-4')
        @endif
        {{ $label }}

        <x-heroicon-o-chevron-up x-show="expanded" x-cloak class="ms-auto block size-4" />
        <x-heroicon-o-chevron-down x-show="!expanded" x-cloak class="ms-auto block size-4" />
    </button>

    <div x-show="expanded" x-collapse class="w-full overflow-hidden" >
        <ul class="ps-3">
            {{ $slot }}
        </ul>
    </div>
</li>