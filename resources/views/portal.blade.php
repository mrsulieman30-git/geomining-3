<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AURUM Portal</title>
    </head>
    <body class="font-sans antialiased">
        @inertia
        @vite(['resources/js/portal/app.ts'])
    </body>
</html>
