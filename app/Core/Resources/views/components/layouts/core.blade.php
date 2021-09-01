<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="font-sans text-sm antialiased theme-light bg-secondary text-primary"
    x-data="{ dark: localStorage.getItem('dark') === 'true'}"
    x-init="$watch('dark', val => localStorage.setItem('dark', val))"
    :class="{ 'theme-dark': dark, 'theme-light': dark === false }"
>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover" />
        <meta name="description" content="Manage your business and/or work life with Onlysort CRM.">

        <title>{{ config('app.name') }}</title>

        <!-- Main stylesheet !-->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" data-turbolinks-track="reload">

        <!-- Main javascript !-->
        <script src="{{ mix('js/app.js') }}" defer data-turbolinks-track="reload"></script>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
