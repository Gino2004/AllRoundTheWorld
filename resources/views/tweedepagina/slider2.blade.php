<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        .photo {
            vertical-align: middle;
            border-radius: 30px;
            height:500px;
            /* margin-bottom:20px; */
            /* margin-top:80px; */
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }

        /* Slideshow container */
        .slideshow-container {
            /* margin-top:80px; */
            width:70%;
            margin-left: 15%;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
        .name{
            margin-left:45%;
        }
    </style>
<body>
    <div class="name">
    <h1>{{$countries->name}}</h1>
    </div>
@foreach($countries->placeofinterests as $placeofinterest)
        @foreach($placeofinterest->Photos as $photo)

<div class="slideshow-container">


    <div class="mySlides fade">
        <img class="photo" src="{{$photo->url}}" style="width:75%">

    </div>


</div>
@endforeach
@endforeach
<br>
<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
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
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        </script>
</body>
</html>