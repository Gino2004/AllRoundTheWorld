<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .antialiased{
            margin:auto;
        }
        .dropdown {
        color: #FFFFFF;
        text-decoration:none;
        padding: 60px;
        }
        

        nav{
        background: #3D69A8;
        padding: 2%;
        font-size: 25px;
        height: 50px;
        }
        
    </style>
<body>
    <header>
    <nav>
<body class="antialiased">
    @foreach($countries as $country)
        <a href="{{$country->id}}">{{$country->name}}</a>
    @endforeach
        @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" >Dashboard</a>
            @else
            <a href="{{ route('login') }}" >Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" ">Register</a>
            @endif
            @endauth
        @endif
    </header>
    </nav>
</body>
</html>