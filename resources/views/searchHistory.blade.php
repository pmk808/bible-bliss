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
                <h1 class = "verseHeading">Search History!</h1>
                @foreach($search as $searched)
                    <h1>{{$searched}}</h1>
                 @endforeach
            </ul>
        </div>
</body>
</html>