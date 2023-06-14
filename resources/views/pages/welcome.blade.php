<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

   @extends('layout.app')

   @section('title_page')

        Laravel Comics | Home

   @endsection

   @section('content')

        <h1>Home Page with Comics</h1>

        {{-- @php

          dd( $comics )

        @endphp --}}

        <div class="container">
          <div class="row">

               @foreach( $comics as $element )

                    <div class="card">
                         <img class="card-img-top" src="{{ $element['thumb'] }}" alt="Title">
                         <div class="card-body">
                              <h4 class="card-title">{{ $element['title'] }}</h4>
                              <h5 class="card-title">{{ $element['series'] }}</h5>
                              <h6 class="card-title">{{ $element['price'] }}</h6>
                              <p class="card-text">{{ $element['description'] }}</p>
                         </div>
                    </div>

               @endforeach 

          </div>
        </div>

   @endsection

</body>

</html>