@extends('templates/template')

<!-- Style -->
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
@section('title', 'Home')


@section('content')
<!-- Main backround -->
<!-- <img src="images/tourist_space.jpg" class="img-fluid" alt="..."> -->
 
  <!-- Sidepanel sexy horizontal -->
  <aside class="sidepanel">
    <i class="fab fa-linkedin "></i>
    <a target="_blank"  href="#" class="sidepanel__link__linkedn"><img src="images/social/61109%20(1).png" alt="linkedn"></a>
    <a target="_blank" href="#" class="sidepanel__link"><img src="images/social/instagram.svg" alt="instagram"></a>
    <a target="_blank"  href="#" class="sidepanel__link"><img src="images/social/github.svg" alt="github"></a>
    <div class="sidepanel__divider"></div>
    <div class="sidepanel__text"><span>Social networks</span></div>
</aside>



@endsection

@section('content2')
<section class="ships">	
	<h2 class="title_content2">Ships</h2>
		<div class="ships__container">
			<div class="ship__img">
				<img src="images/Spaceliner.jpg" alt="">
		</div>
		<p class="discr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere illo modi maxime excepturi vero nihil qui unde laudantium? Laboriosam sit, maxime modi soluta nemo facere exercitationem asperiores! Consequuntur, magnam libero?</p>
	
	</div>
	<a href="#" class="btn">Read more</a>
	
</section>
@endsection

@section('content3')



<!-- <div class="main__buttons">
	
	<a href="#">Packages</a>
	<a href="#">Fly with us</a>
</div> -->

@endsection


@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



@endsection