<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="w-full mx-auto capitalize" x-data="{ showAuthModal: false, isLoggedIn: {{ auth()->check() ? 'true' : 'false' }} }">

    <x-header />

    <x-auth-model />

    <div class="p-4 max-w-[1500px] mx-auto">

        {{ $slot }}
        <livewire:flash-message />
    </div>

    <x-footer />



    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('auth').isAuthenticated = {{ auth()->check() ? 'true' : 'false' }};

            @if (session('show_auth_modal'))
                Alpine.store('auth').showAuthModal = true;
            @endif
        });
    </script>

    @livewireScripts
</body>

</html>
