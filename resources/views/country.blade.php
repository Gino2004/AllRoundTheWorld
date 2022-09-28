<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body{
                background: rgb(19, 19, 19);
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
                width: 100%;
                border-radius: 4px;
                transition: all 500ms;
                overflow: hidden;
                width: 700px;
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

            * {
                box-sizing: border-box;
                text-decoration: none;
            }
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle; border-radius:80px;}

            /* Slideshow container /
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            margin-top:-640px;
            }

            .active {
            background-color: #717171;
            }

            / Fading animation /
            .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            / On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
            }

    .cardcntry1{
            margin-left: 2.5%;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            border-radius: 12px;
            max-width: 80%;
            padding-top: 40px;
            padding-bottom: 40px;
            margin-bottom: 40px;
            background-color: #fff;
            position: relative;
            height: 500px;
            margin-left: 10%;
            margin-top: 20px;
            margin-bottom: -180px;
        }
    

        .cardcntry2{
            margin-left: 2.5%;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            border-radius: 12px;
            max-width: 80%;
            padding-top: 40px;
            padding-bottom: 40px;
            margin-bottom: 40px;
            background-color: #fff;
            position: relative;
            height: auto;
            margin-left: 10%;
            margin-top: -260px;
            
        }

        .fixed-bg {
            background-image: url("https://cdn.discordapp.com/attachments/748841795714154537/1022104150244327525/wereldkaart.jpg");
            min-height: 600px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .crud-card{
            margin-left: 2.5%;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            border-radius: 20px;
            max-width: 80%;
            padding-top: 20px;
            padding-bottom: 20px;
            /* padding-left: 40px;
            padding-right: 40px; */
            margin-top: -20px;
            background-color: #fff;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
            color: black;
            font-size: 2rem;
            font-weight: bold;
            margin-left: 10%;
        }

        </style>
        @include('homepagina.navbar')
        </head>
        <main>
        <div class="cardcntry1">
            @include('tweedepagina.slider2')
        </div>

        <div class="fixed-bg"></div>

        <div class="cardcntry2">
            @include('tweedepagina.tussen2')
        </div>
        </main>
        @include('homepagina.footer')
    </body>
</html>