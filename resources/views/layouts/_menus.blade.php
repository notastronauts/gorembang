<div class="text-gray-500 dark:text-gray-400">
    <div class="flex items-center px-4 py-4 space-x-4 bg-gray-900 shadow-md">
        <x-jet-application-mark class="block w-auto ml-6 h-9" />
        <a class="text-lg font-bold text-gray-300 dark:text-gray-200" href="#">
            {{ config('app.name') }}
        </a>
    </div>
    <ul class="mt-6 mb-6">
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
            {{ __('Models') }}
        </h3>
        <li class="relative px-2 pt-4">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.pendopo') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.pendopo')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                    <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Pendopo') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.kantor-bupati') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.kantor-bupati')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                </svg>
                <span class="ml-4">{{ __('Kantor Bupati') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.alun-alun') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.alun-alun')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Alun Alun') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.hotel') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.hotel')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Hotel') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.kuliner') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.kuliner')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                </svg>
                <span class="ml-4">{{ __('Kuliner') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.ibadah') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.ibadah')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Ibadah') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.travel') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.travel')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Travel') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.pantai') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.pantai')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Pantai') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.oleh-oleh') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.oleh-oleh')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Oleh 0leh') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.klenteng') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.klenteng')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Klenteng') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.batik') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.batik')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Batik') }}</span>
            </a>
        </li>
        <li class="relative px-2">
            <a data-turbolinks-action="replace" class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 {!! request()->routeIs('models.pesantren') ? ' bg-gray-900 text-white focus:outline-none focus:bg-gray-900 transition ease-in-out duration-150' : '' !!}" href="{{route('models.pesantren')}}">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                <span class="ml-4">{{ __('Pesantren') }}</span>
            </a>
        </li>
        <!-- <h3 class="px-3 text-xs font-semibold leading-4 tracking-wider text-gray-500 uppercase">
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
        </li> -->
    </ul>
</div>