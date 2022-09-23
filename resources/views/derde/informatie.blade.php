<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
body{

    background-color: #d5d5d5;
    font-family: Arial, sans-serif;
    
}

.card {
  box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
  max-width: 1400px;
  height:670px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: #fff;
  border-radius: 20px;
}

.img {
    display: block;
    margin-left: 50px;
    margin-top: 70px;
    /*margin-right: auto;*/
    height:auto;
    width: 600px;
    border-radius:20px;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}

.card2 {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
  max-width: 650px;
  height:350px;
  font-family: Arial, sans-serif;
  background-color: #fff;
  margin-left: 700px;
  margin-top: -475px;
  border-radius: 20px;
}

.card3 {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
  max-width: 650px;
  height:90px;
  font-family: Arial, sans-serif;
  background-color: #fff;
  margin-left: 700px;
  margin-top: 20px;
  border-radius: 20px;
}

</style>
</head>
<body>
<div class="card">
@foreach($placeofinterest->Photos as $photoo)
    <img src="{{$photoo->url}}" class="img">
      @endforeach
      <div class="card2">
      <h1>{{$placeofinterest->title}}</h1>

      <h3>{{$placeofinterest->description}}</h3>
      </div>

      <div class="card3">
      <h3>test rating card</h3>
      </div>

      </div>
    </div>
    </a>
</body>
</html>