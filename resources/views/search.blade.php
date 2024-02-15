@extends('index')
@section('search')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css-files/style.css">
    <title>Verses</title>
</head>
<body>
<section class="section-bg"></section>
    <div class="section-text">
        <ul class="textso">
        <h1 class = "verseHeading">Search Results!</h1>
            @foreach($data['results'] as $result)    
                @if($loop->iteration > 3 ) 
                    @break
                @endif
                    <p class="verseChapter">{{ $result['context'] }}</p>
                    <p class="verse">{{ $result['text'] }}</p>
            @endforeach  
        </ul>
    </div>
</body>
</html>
@endsection