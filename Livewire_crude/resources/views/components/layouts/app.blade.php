<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
          <style>
            body{
                background: url('bg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 9px;
                z-index: 999px;
            }
          </style>
    </head>
    <body>
       
        {{ $slot }}
        @livewireStyles
        @livewireScripts
    </body>
</html>
