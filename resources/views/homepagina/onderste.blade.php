<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .photos {
        display: block;
        margin-left: 50px;
        margin-top: 70px;
        margin-right: auto;
        height: auto;
        width: 600px;
        border-radius: 20px;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }

    .card2 {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
        max-width: 650px;
        height: 350px;
        font-family: arial;
        background-color: #fff;
        margin-left: 700px;
        margin-top: -475px;
        border-radius: 20px;
        color: black;
    }
</style>

<body>
    <main>
        @foreach($placeofinterestsen as $placeofinterests)
        @foreach($placeofinterests->Photos as $photo)
        <img class="photos" src="{{$photo->url}}">

        <div class="card2">
            {$placeofinterests->title}}
            {{$placeofinterests->description}}
        </div>
        </div>
        @endforeach
        @endforeach

    </main>
</body>

</html>