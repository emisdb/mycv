<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title-text')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/1e9e0910f4.js' crossorigin='anonymous'></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app_cv.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
</head>
<body>
@yield('left')
<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2"
     id="mySidebar">
    <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright"
       style="padding:0 12px;">
        <i class="fa fa-remove"></i>
    </a>
    <div class="w3-bar-block w3-center">
        <a href="/" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
           onclick="closeNav()">Home</a>
        <a href="/skills" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
           onclick="closeNav()">Skills</a>
        <a href="{{route('edu')}}" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
           onclick="closeNav()">Education</a>
        <a href="/projects/0" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
           onclick="closeNav()">Team work</a>
        <a href="/projects/1" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
           onclick="closeNav()">Personal work</a>
        <a href="/contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
           onclick="closeNav()">Contact</a>
    </div>
</nav>
@yield('content')
<script type="text/javascript">
    // Open and close sidebar
    function openNav() {
        document.getElementById("mySidebar").style.width = "60%";
        document.getElementById("mySidebar").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.display = "none";
    }
    function accFunction(id) {
        var y = document.getElementsByClassName("accordion");
        var x = document.getElementById(id);
        for (i = 0; i < y.length; i++) {
            if(y[i]!=x){  y[i].className = y[i].className.replace(" w3-show", "");}
        }
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    function CvFunction() {
        var x = document.getElementById("cv_button");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    AOS.init();
</script>
</body>
</html>
