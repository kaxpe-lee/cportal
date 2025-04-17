<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">
    <header style="background-color: #233054" class="bg-red-600">
        <nav class="mx-auto flex items-center justify-between p-2">
            <div><img src="{{asset('img/logod.png')}}" height="40px" alt=""></div>
            <div>
                <ul class="flex gap-x-4 text-white">
                    <li>Opción 1</li>
                    <li>Opción 2</li>
                    <li>Opción 3</li>
                    <li>Opción 4</li>
                    <li>Opción 5</li>
                </ul>
            </div>
            <div class="flex text-white gap-x-2">
                <span>DE</span>
                <span><img src="{{ asset('svg/flags/4x3/de.svg') }}" alt="" class="w-6 h-6"></span>
                <span><button class="px-4 py-2 bg-white text-blue-300 rounded-lg">Log in</button></span>
            </div>
        </nav>
       
    </header>
</body>
</html>