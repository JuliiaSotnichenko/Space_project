<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Link CSS -->
     <link href="/css/test.css" rel="stylesheet">
</head>
<body>
    <!-- Sidepanel sexy horizontal -->
<aside class="sidepanel">
    <i class="fab fa-linkedin "></i>
    <a target="_blank"  href="#" class="sidepanel__link__linkedn"><img src="images/social/61109%20(1).png" alt="linkedn"></a>
    <a target="_blank" href="#" class="sidepanel__link"><img src="images/social/instagram.svg" alt="instagram"></a>
    <a target="_blank"  href="#" class="sidepanel__link"><img src="images/social/github.svg" alt="github"></a>
    <div class="sidepanel__divider"></div>
    <div class="sidepanel__text"><span>Social networks</span></div>
</aside>

<!-- navigation bar -->

<nav class="main__navig">
            <a href="{{ url('home') }}">
                <!-- <img class="logo" src="images/logoSF.svg" alt="Starlight logo"> -->
            </a>
            <ul class="main__navig_list">
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a href="{{ url('menu') }}">Menu</a></li>
                <li><a href="{{ url('about us') }}">About us</a></li>
                <li><a href="{{ url('history') }}">History</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <ul class="main__navig_login">
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>

<!-- Main backround with planet -->
<div class="container__main">
<div class="planet"> 
  <div class="wrap">
     <div class="background"></div>
     <div class="clouds">
         <!-- <img src="http://artem.anmedio.ru/dev/planet/clouds.png) " alt=""> -->
     </div>   
  </div>
  <div class="mask">
      <!-- <img src="http://artem.anmedio.ru/dev/planet/mars.jpg" alt=""> -->
  </div>
</div>
</div>

</body>
</html>
