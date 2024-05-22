@extends('user.partials.app')
@section('content')
    <style>
        .pdfobject-container {
            height: 500px;
            border: 1px solid #ccc;
        }
    </style>
    <div id="my-pdf"></div>
    <button onclick="readMe()">Read Me</button>
    <script src="https://unpkg.com/pdfobject"></script>
    <script>
       function readMe(){
         PDFObject.embed(C:\Users\God Reigns\Desktop\mySchool\storage\app\Books\the-biafra-story-the-making-of-an-african-legend-pdfdrive-2_y0XS.pdf, "#my-pdf");
       }
    </script>
@endsection
