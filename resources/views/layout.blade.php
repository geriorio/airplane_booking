<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            min-height: 100vh;
            min-width: 100vw;
            box-sizing: border-box;
            margin: 0;
            overflow-x: hidden;
        }
    </style>


    @vite('resources/css/app.css')
</head>

<body>
    @include('navbar')
    @yield('body')

    @include('footer')
</body>

</html>
