<div class="text-gray-500 dark:text-gray-400">
    <div class="flex items-center px-4 py-4 space-x-4 bg-gray-900 shadow-md">
        <x-jet-application-mark class="block w-auto ml-6 h-9" />
        <a class="text-lg font-bold text-gray-300 dark:text-gray-200" href="#">
            {{ config('app.name') }}
        </a>
    </div>
    <ul class="mt-6">
        <!-- Logs tabs -->
        <h3 class="px-3 mt-8 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase">
            {{ __('Administration') }}
        </h3>
        <li class="relative px-2 py-4">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('dashboard') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('dashboard')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                <span class="ml-4">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <h3 class="px-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase">
            {{ __('User Management') }}
        </h3>
        <li class="relative px-2 pt-4">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('user-management.users') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('user-management.users')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
                <span class="ml-4">{{ __('Users') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('users.index') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('dashboard')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
                <span class="ml-4">{{ __('Roles') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('users.index') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('dashboard')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Permissions') }}</span>
            </a>
        </li>
    </ul>
</div>