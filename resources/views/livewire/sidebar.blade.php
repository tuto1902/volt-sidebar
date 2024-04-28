<div x-data="{ open: false }">
    <!-- Sidebar Mobile Toggle -->
    <div class="sticky lg:hidden z-20 bg-white border-y px-4 sm:px-6 md:px-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex gap-2 items-center py-4 px-2">
            <button type="button" @click="open = true" class="text-gray-500 hover:text-gray-600">
                <span class="sr-only">Toggle Navigation</span>
                <x-heroicon-o-bars-3 class="flex-shrink-0 size-4" />
            </button>
            <!-- Breadcrumbs -->
            <div class="mobile-breadcrumbs">
                <!-- Mobile breadcrumbs will be teleported here -->
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div :class="{ 'translate-x-0': open }" class="transform -translate-x-full lg:translate-x-0 transition-all duration-300 fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500 dark:bg-gray-800 dark:border-gray-700">

    </div>
    
    <!-- Overlay -->
    <div x-show="open" x-cloak x-transition.opacity @click="open = false" class="fixed inset-0 z-[59] bg-gray-900 bg-opacity-50 dark:bg-opacity-80"></div>
</div>
