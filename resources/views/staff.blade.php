<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AURUM Staff</title>
    </head>
    <body class="font-sans antialiased">
        @inertia
        @vite(['resources/js/staff/app.ts'])
    </body>
</html>
