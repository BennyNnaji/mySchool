<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ Storage::url('front/favicon.png') }}" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>

<body class=" bg-gray-100">
    @include('user.sections.header')
    <section class=" flex">
        @include('user.sections.sidebar')
        <div class="w-full">
            <div class=" min-h-screen">
                   <marquee class=" bg-red-600 text-white"> <h3>Yet to activate toastr and fontwesome</h3></marquee>
                @yield('content')

            </div>
            <p class="text-end text-blue-950 ">{{ config('app.name') }} &copy; {{ date('Y') }} | All Rights Reserved
            </p>
        </div>

    </section>
</body>
</html>
