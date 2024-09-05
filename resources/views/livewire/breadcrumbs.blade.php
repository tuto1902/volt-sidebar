<?php

use Livewire\Volt\Component;

new class extends Component
{

    public array $breadcrumbItems;
    public array $teleportLocations = [
        '.mobile-breadcrumbs',
        '.header-breadcrumbs'
    ];
}; ?>

<div>
    @foreach($teleportLocations as $location)
        @teleport($location)
            <ol class="flex items-center whitespace-nowrap">
                @foreach($breadcrumbItems as $label => $url)
                    <li class="inline-flex items-center">
                        @if($url)
                            <a href="{{ $url }}" wire:navigate class="flex items-center text-sm text-gray-700 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none">
                                {{ $label }}
                            </a>
                            <x-heroicon-o-chevron-right class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" />
                        @else
                            <span class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200">
                                {{ $label }}
                            </span>
                        @endif
                    </li>
                @endforeach
            </ol>
        @endteleport
    @endforeach
</div>
