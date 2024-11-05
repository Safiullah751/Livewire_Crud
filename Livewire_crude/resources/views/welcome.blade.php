<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
 <nav class="shadow-xl items-center text-center px-6 space-x-10 p-6 font-bold text-3xl">
    <a class="hover:text-orange-400 delay-75" href="{{route('first')}}">Counter</a>
    <a class="hover:text-orange-400 delay-75" href="{{route('form')}}">Form</a>
</nav>
</body>
</html>
