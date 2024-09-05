<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $title;
}; ?>

<div>
    @teleport('.header')
    <header>
        <div class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 sm:py-4 lg:ps-64 dark:bg-gray-800 dark:border-gray-700">
            <nav class="flex basis-full justify-between items-center w-full mx-auto px-4 sm:px-6 md:px-8">
                <div class="me-5 lg:me-0 lg:hidden">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-xl font-semibold dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                        <span>{{ config('app.name') }}</span>
                    </a>
                </div>
                <div class="lg:w-full flex items-center justify-end ms-auto sm:justify-between sm:gap-x-3 sm:order-3">
                    <div class="hidden lg:block">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ $title }}
                        </h2>
                    </div>

                    <livewire:settings-dropdown />
                </div>
            </nav>
        </div>

        <!-- Breadcrumbs -->
        <div class="hidden lg:flex items-center flex-wrap sticky top-0 inset-x-0 sm:justify-start sm:flex-nowrap z-0 w-full bg-white border-b text-sm py-2.5 sm:py-4 lg:ps-64 lg:pe-2 dark:bg-gray-800 dark:border-gray-700">
            <div class="header-breadcrumbs ml-8">
                <!-- Breadcrumbs will be teleported here -->
            </div>
        </div>
    </header>
    @endteleport
</div>
