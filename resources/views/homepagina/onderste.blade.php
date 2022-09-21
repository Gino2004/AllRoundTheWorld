<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     .photo {
            vertical-align: middle;
            border-radius: 30px;
            height:500px;
            margin-bottom:20px;
            margin-top:80px;
        }
</style>
<body>
    <main>
        
    @foreach($placeofinterestsen as $placeofinterest)
            @foreach($placeofinterest->Photos as $photo)
                <img class="photo" scr="{{$photo->url}};">
                    {{$placeofinterest->title}} 
            @endforeach
    @endforeach
    </main>
</body>
</html>