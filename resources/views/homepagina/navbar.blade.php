<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            html,body{
                height: 100%;
            }
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            ul{
                list-style: none;
            }
            body{
                font-size: 1rem;
                line-height: 1.6;
                background-color: #ecf0f1;
                color: #666;
            }

            /* nav styles */
            header{
                background-color: #2c3e50;
                padding: .5rem 0;
            }
            nav{
                max-width: 90%;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .menu > li, .menu > a{
                display: inline-block;
            }

            .menu li {
                position: relative;
            }

            .menu a {
                text-decoration: none;
                color: #fff;
                display: block;
                padding: 10px 1.5rem;
                transition: background-color .22s ease, color .22s ease;
            }

            .menu a:hover{
                background-color: #f34949;
                color: #fff;
            }

            .submenu{
                position: absolute;
                background-color: #2c3e50;
                width: 140px;
                left: 0;
                display: none;
            }

            .submenu2 {
                position: absolute;
                left: 100%;
                width: 140px;
                top: 0;
                background-color: #2c3e50;
                display: none;
            }

            .menu li:hover > .submenu{
                display: block;
                animation: slideup .3s ease;
            }

            .submenu li:hover > .submenu2{
                display: block;
                animation: slideleft .3s ease;
            }

            @keyframes slideup {
                0%{
                    opacity: 0;
                    transform: translateY(18px);
                }

                100%{
                    opacity: 1;
                    transform: none;
                }
            }

            @keyframes slideleft {
                0%{
                    opacity: 0;
                    transform: translateX(18px);
                }

                100%{
                    opacity: 1;
                    transform: none;
                }
            }

            /* logo styles */
            .LogoPhoto{
                width: 70px;
            }


        </style>
    </head>
    <body>
        <header>
            <nav>
                <img class="LogoPhoto" src="https://cdn.discordapp.com/attachments/917847326951870514/1021759702050275348/aawrlogo.png?size=4096" alt="">
                <ul class="menu" style="padding-left:10px">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Countries</a>
                        <ul class="submenu">
                            @foreach($continents as $continent)
                                <li><a href="/">{{$continent->name}}</a>
                                    <ul class="submenu2">
                                        @foreach($continents as $continent)
                                            <li><a href="#">{{$continent->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" >Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" style="padding-right:10px">Log in </a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" ">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </header>
    </body>
    <script>

    </script>
</html>