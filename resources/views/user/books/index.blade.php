@extends('user.partials.app')
@section('content')
    <section class=" p-3 grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-4">

            @foreach ($books as $book)
            <a href="{{ route('book.view', [$book->id, $book->document]) }}">
                <div class=" elevation-5">
                    <img src="https://picsum.photos/200/300" alt="">
                    <p class=" text-center">{{ $book->title }}</p>
                    <p class="text-center capitalize p-1">{{ Str::replace('-', ' ', $book->document) }}</p>
                    <p class=" italic text-sm text-gray-400 text-justify p-1">{{   Str::limit($book->description, 50, '...')}} </p>
                </div>
            </a>
                
            @endforeach
    </section>
@endsection
