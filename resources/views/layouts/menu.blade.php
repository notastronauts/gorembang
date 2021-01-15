<!-- Desktop sidebar -->
<aside x-show="isSideMenuMediumOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-gray-800 dark:bg-gray-800 md:block">
    @include('layouts._menus')
</aside>