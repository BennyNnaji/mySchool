<?php

namespace App\Http\Controllers\User;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\MockObject\Stub\Exception;

class BookController extends Controller
{
    public function list()
    {
        $books = Book::all();
        $title = 'My Books';
        return view('user.books.index', compact('title', 'books'));
    }
    public function add()
    {
        $title = 'Upload Book';
        return view('user.books.upload', compact('title'));
    }
    public function upload(Request $request)
    {
        $book = $request->validate([
            'document' => 'required|file|mimes:pdf,doc,docx, doc, txt|max:20048',
            'title' => 'required',
            'description' => 'required|max:200'
        ]);
       
        try {
            $document = $request->file('document');
            $originalName = pathinfo($document->getClientOriginalName(), PATHINFO_FILENAME);
            $sluggedName = Str::slug($originalName);
            $uniqueId = Str::random(4);
            $extension = $document->getClientOriginalExtension();
            $documentSaveName = $sluggedName . '_' . $uniqueId . '.' . $extension;

            // Store the uploaded file
            $document->storeAs('Books', $documentSaveName);

            // Create a new Book record
            $book = Book::create([
                'title' => $request->title,
                'description' => $request->description,
                'document' => $documentSaveName,
                'user_id' => auth()->user()->id
            ]);

            return redirect()->route('book.list')->with('success', 'File uploaded successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['upload_error' => 'An error occurred during upload. Please try again.']);
        }
    }
    public function view($id)
    {
        $book = Book::findOrFail($id);

        // if (!$book) {
        //     abort(404, 'Book not found');
        // }

        $title = Str::upper(Str::replace('-', ' ', $book->document));

        // // Assuming the disk is configured as 'Books' in config/filesystems.php
        // $filePath = 'Books/' . $book->document;

        // if (!Storage::disk('Books')->exists($filePath)) {
        //     abort(404, 'Document not found');
        // }

        // $documentContent = Storage::disk('Books')->get($filePath);

        return view('user.books.view', compact('book', 'title'));
    }
}
