<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<main>
    <style>body{
                
                color: #fff;
            }
            .country-text{
                text-align: center;
                font-size: 3em;
            }
            
            .card{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-size: 3rem;
                color: #fff;
                box-shadow: rgba(3, 8, 20, 0.1), rgba(2, 8, 20, 0.1) 0px 0.075rem 0.175rem;
                height: 100%;
                width: 75%;
                border-radius: 4px;
                transition: all 500ms;
                overflow: hidden;
                margin-left: 80px;

                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .card:hover{
                box-shadow: rgba(3, 8, 20, 0.1) 0px 0.35em 1.175em, rgba(2, 8, 20, 0.08) 0px 0.175em 0.5em;
                transform: translateY(-3px) scale(1.1);
            }
            .photo-grid{
                display: grid;
                gap: 1rem;
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                grid-auto-rows: 240px;
            }

            * {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle; border-radius:80px;}
</style>
<body>
    <div class="photo-grid">

        
   

            @foreach($placeofinterests as $placeofinterest)
            @foreach($placeofinterest->Photos as $photo)
                <div class="card" style="background-image:url({{$photo->url}});">
                    {{$placeofinterest->title}} 
                </div>
            @endforeach
@endforeach
        </div>
    </main>
</body>
</html>