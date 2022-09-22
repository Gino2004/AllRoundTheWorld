<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="photo-grid">

        @foreach($countries->placeofinterests as $placeofinterest)
        @foreach($placeofinterest->Photos as $photo)
        <div class="card" style="background-image:url({{$photo->url}});">
            {{$placeofinterest->title}}
        </div>
        @endforeach
        @endforeach
    </div>

</body>

</html>