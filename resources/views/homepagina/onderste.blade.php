<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> 
.photos{
    display: block;
    margin-left: 50px;
    margin-top: 70px;
    margin-right: auto;
    height: 370px;
    width: 570px;
    border-radius:20px;
    border-radius:20px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    margin-left: 70px;
}
.card2 {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
  max-width: 650px;
  height:350px;
  font-family: arial;
  background-color: #fff;
  margin-left: 789px;
  margin-top: -375px;
  border-radius: 20px;
  color: black;
}

.card3 {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
  max-width: 631px;
  height: 377px;
  font-family: arial;
  background-color: #fff;
  margin-left: -810px;
  margin-top: 32px;
  border-radius: 20px;
  color: black;
}


</style>
<body>
    <main>
    @foreach($placeofinterestsen as $placeofinterests)
            @foreach($placeofinterests->Photos as $photo)
            <img class="card3" src="{{$photo->url}}">

                    <div class="card2">{{$placeofinterests->title}} 
                    {{$placeofinterests->description}}
                </div>
                </div>
            @endforeach
            @endforeach

    </main>
</body>
</html>