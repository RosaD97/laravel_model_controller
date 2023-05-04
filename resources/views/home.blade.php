<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container text-center">
            <h1 class="my-3">Books</h1>

            <div class="d-flex flex-wrap gap-4">
                @foreach ($movies as $movie)

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Original title: {{ $movie->original_title }}</h6>

                    <hr>
                    <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                    <p class="card-text">Date: {{ $movie->date }}</p>
                    <p class="card-text">Vote: {{ $movie->vote }}</p>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </body>
</html>
