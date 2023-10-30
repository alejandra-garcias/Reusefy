<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{ $title ?? 'Reusefy' }}</title>
    @livewireStyles
    @vite(['resources/sass/app.scss'])

    {{ $style ?? '' }}

</head>

<body>
   <x-nav/>


    @if (session()->has('message'))
        <x-alertt :type="session('message')['type']" :message="session('message')['text']" />
    @endif
    {{ $slot }}
    <x-footer />
    @livewireScripts

    @vite(['resources/js/app.js'])
    {{ $script ?? '' }}

</body>

</html>
