<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'Bajanko Jaiteh') }}</title>
        <!-- Vite Assets -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen transition-colors duration-300 flex flex-col">
        <!-- Include the navbar component -->
        @include('components.navbar')
        
        <!-- Page Content -->
        <main class="flex-grow page-transition transform transition-all duration-300 ease-in-out">
            <div class="max-w-7xl mx-auto pt-16 px-4 sm:px-6 lg:px-8 py-8">
                @yield('content')
            </div>
        </main>
        
        <!-- Footer -->
        @include('components.footer')
        
        <!-- JavaScript for functionality -->
        @include('components.scripts')
    </body>
</html>
