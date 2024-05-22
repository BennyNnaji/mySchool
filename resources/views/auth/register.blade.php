<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ Storage::url('front/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
</head>

<body class="bg-gray-100">
    <section class="flex flex-col items-center min-h-screen justify-center">
        <div>
            <a href="">
                <img src="{{ Storage::url('front/logo.png') }}" alt="Logo" class="w-2/6 md:w-3/6 mx-auto">
            </a>
        </div>
        <div class="elevation-10 w-3/6 bg-gray-200">
            <form action="{{ route('registerPost') }}" method="post">
                @csrf
                <div class="p-4 ">
                    <h2 class="text-center text-2xl">Register</h2>
                    <div class="my-3">
                        <label for="name" class="block text-xl font-semibold"> Full name </label>
                        <input type="text" name="name" placeholder="Full name " class="form-input w-full"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-500"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label for="email" class="block text-xl font-semibold"> Email </label>
                        <input type="email" name="email" placeholder="Email " class="form-input w-full"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label for="password" class="block text-xl font-semibold"> Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-input w-full"
                            value="{{ old('password') }}">
                        @error('password')
                            <span class="text-red-500"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label for="password_confirmation" class="block text-xl font-semibold"> Confirm Password </label>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password " class="form-input w-full"
                            value="{{ old('password_confirmation') }}">
                        @error('password')
                            <span class="text-red-500"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class=" flex justify-between my-3">
                        <div>
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-blue-200 hover:text-blue-200 rounded px-6 py-2">
                                <i class="fa-solid fa-right-to-bracket"></i> Register</button>
    
                        </div>
                        <div>
                            <p> <a href="{{ route('login') }}" class="text-blue-600 capitalize">have account?
                                    Login</a></p>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
