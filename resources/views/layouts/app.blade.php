<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="w-full mx-auto capitalize">

    <x-header />

    @livewire('AuthDialog')

    <div class="p-4 max-w-[1500px] mx-auto">

        {{ $slot }}

        @livewire('FlashMessage')
    </div>

    <x-footer />

    @livewireScripts
</body>

</html>
