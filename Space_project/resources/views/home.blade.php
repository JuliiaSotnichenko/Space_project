@extends('templates/template')

<!-- Style -->
@section('style')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
@section('title', 'Home')


@section('content')
<div class="content">
<!-- Main backround -->
<!-- <img src="images/tourist_space.jpg" class="img-fluid" alt="..."> -->
 
  <!-- Sidepanel sexy horizontal -->
  <aside class="sidepanel">
    <a target="_blank"  href="#" class="sidepanel__link__linkedn"><img src="images/social/61109%20(1).png" alt="linkedn"></a>
    <a target="_blank" href="#" class="sidepanel__link"><img src="images/social/instagram.svg" alt="instagram"></a>
    <a target="_blank"  href="#" class="sidepanel__link"><img src="images/social/github.svg" alt="github"></a>
    <div class="sidepanel__divider"></div>
    <div class="sidepanel__text"><span>Social networks</span></div>
</aside>


</div>
@endsection

@section('content2')
<section class="ships">	
		<h2 class="title_content2">Ships</h2>
	<div class="ships__container">
			<div class="ship__card">
				<div class="imgBx">
					<img src="images/Starship.jpg" alt="">
				</div>
		<div class="content_card">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ab repudiandae quos amet voluptates fugiat at. Fugit sequi reiciendis repellendus eos, facilis suscipit aspernatur nulla expedita, ducimus laudantium sit iste.</p>
		</div>		
	</div>
	<!-- <h2 class="title_content2">Ships</h2> -->
	<div class="ship__card">
				<div class="imgBx">
					<img src="images/Space-hotel.jpg" alt="">
				</div>
		<div class="content_card">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ab repudiandae quos amet voluptates fugiat at. Fugit sequi reiciendis repellendus eos, facilis suscipit aspernatur nulla expedita, ducimus laudantium sit iste.</p>
		</div>		
	</div>
		<a href="#" class="btn">Read more</a>
	</div>
	

	<h2 class="title_content2">Accomodation</h2>
	<div class="ships__container">
			<div class="ship__card">
				<div class="imgBx">
					<img src="images/Space-hotel.jpg" alt="">
				</div>
		<div class="content_card">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ab repudiandae quos amet voluptates fugiat at. Fugit sequi reiciendis repellendus eos, facilis suscipit aspernatur nulla expedita, ducimus laudantium sit iste.</p>
		</div>	
		
	</div>
	<div class="ship__card">
				<div class="imgBx">
					<img src="images/Starship.jpg" alt="">
				</div>
		<div class="content_card">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ab repudiandae quos amet voluptates fugiat at. Fugit sequi reiciendis repellendus eos, facilis suscipit aspernatur nulla expedita, ducimus laudantium sit iste.</p>
		</div>		
	</div>



	<a href="#" class="btn">Read more</a>	
	</div>
	<!-- Subscribe -->

	  <form action="{{ url('/') }}" method="post">
    <div class="form-group">
        <label for="exampleInputEmail"></label>
        <input type="email" name="user_email" id="exampleInputEmail" class="form-control" placeholder="Email Address">
        {{ csrf_field() }}
		<div class="myBtn">
	  		<button type="submit" class="btn">Subscribe</button>
	  </div>
	  </div>
	 
	  
</form>
	

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

</div>


@endsection