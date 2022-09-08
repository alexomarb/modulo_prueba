<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />
        <div class="min-h-screen bg-gray-100">
            <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen">
                <aside class="flex-shrink-0 w-64 flex flex-col border-r transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
                    <nav class="flex-1 flex flex-col bg-white">
                        <x-sidebar.sidebar/>
                    </nav>
                </aside>
                <div class="flex-1">
                    @livewire('navigation-menu')
                    <header class="flex items-center p-1 bg-white shadow ">
                        <div class="sm:px-6">
                                <x-nav-link/>
                        </div>

                    </header>
                    <main class="p-4">
                        <main>
                            {{ $slot }}
                        </main>
                    </main>
                </div>
            </div>
        </div>
        @stack('modals')
        @livewireScripts






        {{-- <x-jet-banner />
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @stack('modals')
        @livewireScripts --}}



    </body>
</html>
