<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
            color: white;
        }
        .photo-grid{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-auto-rows: 300px;
        }
        .photo2{
            margin-left: 5%;
            margin-right: 5%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius:24px;
            height: 100%;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            
        }
        .photo2:hover{
            box-shadow: rgba(3, 8, 20, 0.1) 0px 0.35em 1.175em, rgba(2, 8, 20, 0.08) 0px 0.175em 0.5em;
            transform: translateY(-3px) scale(1.05);
        }
    </style>
<body>
    <div class="photo-grid">

        @foreach($countries->placeofinterests as $placeofinterest)
        @foreach($placeofinterest->Photos as $photo)
        <a href="/placeofinterest/{{$placeofinterest->id}}"><div class="photo2" style="background-image:url({{$photo->url}});">
            {{$placeofinterest->title}}
        </div>
        </a>
        @endforeach
        @endforeach
    </div>

</body>

</html>