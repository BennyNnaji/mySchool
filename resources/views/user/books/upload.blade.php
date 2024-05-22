@extends('user.partials.app')
@section('content')
    <div class="min-h-screen">
        <section class="flex items-center">
            <div class="w-3/6 elevation-5 p-3 mx-auto my-7">
                <h1 class="text-center">Add Book</h1>
                <form action="{{ route('book.upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <label for="document" class=" block text-xl"> Book <span class=" italic text-xs text-red-400"> Allowed
                                Files: pdf, doc, docx, doc, txt, epub </span></label>
                        <input type="file" name="document" id="document" accept=".pdf,.docx,.xlsx,.txt">
                        @error('document')
                            <span class="text-red-500"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror

                    </div>

                    <div class="my-3">
                        <label for="title" class=" block text-xl"> Title </label>
                        <input type="text" name="title" id="title" placeholder="Title "
                            class=" w-full form-input rounded" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-red-500"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for="description" class=" block text-xl"> Description </label>
                        <textarea name="description" id="description" class=" form-textarea w-full rounded">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-red-500"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="bg-blue-950 text-blue-200 rounded px-6 py-2 hover:bg-blue-800 hover:text-blue-100">
                            Upload</button>
                    </div>

                </form>

            </div>

        </section>
    </div>
@endsection
