@extends('templates/template')

<!-- Style -->
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection
@section('title', 'About us')

</head>
<body>
@section('content')

<!-- Style -->
@section('style')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection


<!-- @section('title', 'Home') -->

<!-- Style -->
@section('style')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

<article>
    <!-- <section class="banner">
        <div>
            <h1>ABOUT US</h1>
        </div>
    </section>
    <section class="introduction">
        <div>
            <p class="infodump">
                StarFlight International&trade; was founded in 2000 based on the vision of Steve Weidig to be able to visit space.
                After tinkering in his garage for 16 years and the evolution of technology, the dream of a lifetime became a reality and
                you can purchase your tickets today to see what we imagined for you.
            </p>
        </div>

        
    </section> -->

 
    
      
    <!-- <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/images//all-images/Mars-bungalow.jpg" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         
    </div>
  </div>
</div> -->


   
     <section class="profiles"> -->

         <div>
            <ul>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Steve Weidig</h4>
                        <p class="adescript">The original Elon Musk from Luxembourg, pioneer of cryptocurrency, he became a billionaire the year he turned 18. He built his first spaceship out of tuna cans and duct tape. A true visionnaire.</p>
                    </div>
                </li>
                <div>
                    <p class="infodump">Accompanying him were his crew of madlads and misfits, ready to do anything it would take to make this project come to fruition: killing, spying or stealing. Real pirates those people.</p>
                </div>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Yuliia Sotnichenko</h4>
                        <p class="adescript">Had to leave her native Ukraine after strangling a mafia boss because she wasn’t in a good mood.</p>
                    </div> 
                </li>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Viktor Chitaev</h4>
                        <p class="adescript">Raised by bears in the depths of the Oural, his dream was to leave this god awful planet.</p>
                    </div>
                </li>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Ivan Santos</h4>
                        <p class="adescript">Consecrated “Dance King” of the Cape Verde Islands for 10 years in a row since age 6, it seemed natural he needed a new challenge.</p>
                    </div>
                </li>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Maxime Severino</h4>
                        <p class="adescript">Just another random white guy, but at least he's pretty fly.</p>
                    </div>
                </li>
            </ul>
        </div> 
    </section>
</article>



@endsection
</body>
</html>
