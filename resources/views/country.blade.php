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
        </style>
        </head>
        <body>
            
        <div class='country-text'>
            [Country]
            
        </div>
        <br/>

        <!-- slideshow -->
        <div class="slideshow-container">

            <div class="mySlides fade">
            
                <img src="https://jssors8.azureedge.net/demos/image-slider/img/px-beach-daylight-fun-1430675-image.jpg" style="width:100%">
            
            </div>
            
            <div class="mySlides fade">
                
                <img src="https://wowslider.com/sliders/demo-77/data1/images/field175959_1920.jpg" style= "width:100%">
            
            </div>
            
            <div class="mySlides fade">
            
                <img src="https://jssors8.azureedge.net/demos/image-slider/img/faded-monaco-scenery-evening-dark-picjumbo-com-image.jpg" style="width:100%">
            
            </div>
            
            </div>
            <br>
            
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        <!-- slideshow end -->
        <br/>
        <br/>

        <div class="photo-grid">
            @foreach($placeofinterests as $placeofinterest)
                @foreach($placeofinterest->Photos as $photo)
                    <div class="card" style="background-image:url({{$photo->url}});">
                        {{$placeofinterest->title}} 
                    </div>
                @endforeach
            @endforeach
        </div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </body>
</html>