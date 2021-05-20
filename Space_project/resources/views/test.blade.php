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






<!-- Title -->
<!-- <h1 class="home__title">TOGETHER WE OPEN SPACE FOR CHANGE MIND</h1> -->

<!-- Packages card from Bootstrap -->
<!-- Earth Rotation https://codepen.io/stephaniewalter/pen/vYGmrLR  -->

<div class="comet-rain">
	<!-- symbol definition -->
	<svg role="presentation" id="svg-comet" class="svg-defs" data-name="comet" viewBox="0 0 195 173.05" width="195" height="173.05">
		<symbol id="comet">
			<path d="M192.39.66c-33.66,31.46-93.3,81.16-129,108.88L3.42,156c-5,3.89-4.29,11.28.74,15.4s12.84-.83,13.1-1.07C51.09,138.62,82.6,104.72,116.64,73c8.89-8.29,66.23-59.5,77.47-70.13C196.17,1,194.24-1.08,192.39.66Z" />
		</symbol>
	</svg>

	<!-- gradient definition for the comets -->
	<svg role="presentation" width="0" height="0">
		<defs>
			<linearGradient id="gradient" x1="194.94" y1="4.2" x2="11.72" y2="161.98" gradientUnits="userSpaceOnUse">
				<stop offset="0%" stop-color="#fff" stop-opacity="0.03"></stop>
				<stop offset="100%" stop-color="var(--t-sun-color)"></stop>
			</linearGradient>
		</defs>
	</svg>

	<svg role="presentation" class="comet-01 comet-instance" width="195" height="173.05" viewBox="0 0 195 173.05">
		<use xlink:href="#comet" />
	</svg>

	<svg role="presentation" class="comet-02 comet-instance" width="195" height="173.05" viewBox="0 0 195 173.05">
		<use xlink:href="#comet" />
	</svg>

	<svg role="presentation" class="comet-03 comet-instance" width="195" height="173.05" viewBox="0 0 195 173.05">
		<use xlink:href="#comet" />
	</svg>

	<svg role="presentation" class="comet-04 comet-instance" width="195" height="173.05" viewBox="0 0 195 173.05">
		<use xlink:href="#comet" />
	</svg>

	<svg role="presentation" class="comet-05 comet-instance" width="195" height="173.05" viewBox="0 0 195 173.05">
		<use xlink:href="#comet" />
	</svg>

	<svg role="presentation" class="comet-06 comet-instance" width="195" height="173.05" viewBox="0 0 195 173.05">
		<use xlink:href="#comet" />
	</svg>
</div>

<div class="container1">
	<div class="solar-system-animation">
		<svg id="animation-scene" class="animation-scene" viewBox="0 0 1400 1400">
			<g id="Solar-system">
				<circle id="sun-path" class="astral-paths earth-path" cx="700" cy="700" r="446.73" />
				<g id="system-sun" class="system-sun">
					<g class="shadow-02-container">
						<path id="Shadow-2" class="sun-system-shadow-02" d="M891,701.53c-.73-17.83-24.69-14.39-27-34.15-.62-14.17,22.33-20.33,13.08-40.67-7.35-16.19-28.2-3.64-37.76-21-5.88-12.84,13-27.52-3.14-42.69-12.85-12.07-27.42,7.67-42.74-4.61-10.24-9.56,1.73-30.51-18.88-38.2-16.4-6.13-22.46,17.81-41.22,12.46-13-4.82-9.83-28.86-31.75-27.91-17.44.76-14.09,25.24-33.42,27.64-13.85.64-19.88-22.82-39.78-13.36-15.84,7.52-3.57,28.83-20.54,38.6-12.56,6-26.91-13.3-41.75,3.22-11.82,13.14,7.49,28-4.52,43.69-9.36,10.47-29.85-1.76-37.38,19.31-6,16.76,17.41,23,12.18,42.13-4.72,13.33-28.24,10-27.31,32.46.73,17.83,24.69,14.39,27,34.15.62,14.17-22.33,20.33-13.08,40.67,7.35,16.19,28.19,3.64,37.75,21,5.89,12.84-13,27.51,3.14,42.69,12.86,12.07,27.43-7.68,42.76,4.61,10.22,9.56-1.73,30.51,18.87,38.2,16.4,6.13,22.46-17.81,41.22-12.46,13,4.82,9.83,28.86,31.75,27.91,17.45-.76,14.09-25.24,33.42-27.64,13.85-.64,19.88,22.82,39.78,13.36,15.84-7.52,3.57-28.82,20.53-38.6,12.57-6,26.92,13.3,41.77-3.22,11.81-13.14-7.5-28,4.52-43.69,9.35-10.47,29.84,1.75,37.37-19.31,6-16.76-17.41-23-12.18-42.13C868.4,720.66,891.91,723.94,891,701.53Z" />
					</g>
					<g class="shadow-01-container">
						<path id="Shadow-1" class="sun-system-shadow-01" d="M853.11,701.23c-.59-14.3-19.79-11.54-21.66-27.38-.51-11.36,17.89-16.3,10.48-32.61-5.9-13-22.61-2.92-30.27-16.82-4.72-10.29,10.43-22.06-2.52-34.22-10.31-9.68-22,6.15-34.27-3.7-8.21-7.66,1.39-24.46-15.13-30.63-13.15-4.91-18,14.28-33,10-10.46-3.87-7.88-23.14-25.45-22.38-14,.61-11.3,20.23-26.8,22.16-11.11.51-15.94-18.3-31.89-10.72-12.7,6-2.86,23.12-16.47,31-10.07,4.82-21.57-10.66-33.47,2.58-9.48,10.54,6,22.47-3.63,35-7.5,8.4-23.93-1.41-30,15.48-4.8,13.44,14,18.41,9.77,33.78-3.78,10.69-22.64,8.06-21.89,26,.59,14.3,19.79,11.54,21.66,27.38.51,11.36-17.89,16.3-10.48,32.61,5.9,13,22.6,2.92,30.27,16.81,4.72,10.3-10.44,22.07,2.52,34.23,10.31,9.68,22-6.15,34.27,3.7,8.2,7.67-1.38,24.46,15.13,30.63,13.15,4.91,18-14.28,33-10,10.46,3.87,7.88,23.14,25.45,22.38,14-.61,11.3-20.23,26.8-22.16,11.11-.51,15.94,18.3,31.89,10.72,12.7-6,2.86-23.12,16.46-31,10.07-4.82,21.58,10.66,33.48-2.58,9.48-10.54-6-22.47,3.63-35,7.5-8.39,23.93,1.4,30-15.48,4.8-13.44-14-18.41-9.77-33.78C835,716.56,853.86,719.19,853.11,701.23Z" />
					</g>
					<g id="Sun-Center" class="sun-center">
						<g id="sun-bg">
							<ellipse class="sun-system-bg" cx="700.1" cy="700.02" rx="112.62" ry="111.31" />
						</g>
						<g id="solar-pattern" class="sun-system-patterns">

							<path d="M645.23,691.65c-22.92-1.52-43.41,35.65-17.18,45.57,23.25,3.94,10-15.63,23.57-22C666.1,709.92,671.45,691.23,645.23,691.65Z" />
							<path d="M677.68,619.74c-11,4.66,2.61,17.09,7.19,6.73C686.21,622.31,681.56,618.62,677.68,619.74Z" />
							<path d="M677.33,650.71c-2.92-9.79-21.62-11.71-23.4-.51C626.38,669.21,686.18,680.3,677.33,650.71Z" />
							<path d="M692.35,637.33c-4.34,0-4.35,6.75,0,6.75S696.71,637.33,692.35,637.33Z" />
							<path d="M796.8,693.83c-2.73-40.32-54.15-24.47-22.92,8.42,3.83,12.2-32.82,31.45-1.68,34.78C789.86,732.64,796.87,710.12,796.8,693.83Z" />
							<path d="M760.72,702c-3.23-6.51-12.89-1.75-10.73,4.83C752.53,714.43,764,708.8,760.72,702Z" />
							<path d="M752.51,745.21c-4.35,0-4.35,6.76,0,6.76S756.87,745.21,752.51,745.21Z" />
							<path d="M645.85,742.12c-4.35,0-4.36,6.75,0,6.75S650.2,742.12,645.85,742.12Z" />
						</g>
					</g>
				</g>
				<g class="system-earth-moon-container">
					<g id="system-earth" class="system-earth-moon">
						<circle class="astral-paths moon-path" cx="700" cy="257.25" r="163.79" />
						<g id="earth" class="system-earth">
							<circle id="Shadow-2-2" class="earth-shadow-02" cx="700" cy="255.79" r="95.31" />
							<circle id="Shadow-1-2" class="earth-shadow-01" class="cls-5" cx="699.31" cy="256.48" r="76.5" />
							<g id="Planet" class="planet">
								<circle id="water-bg" class="earth-water" cx="699.7" cy="256.09" r="56.15" />
								<g id="continents" class="earth-continent">
									<path d="M687.11,207.26c2,4.53,8.75,4.4,11.32.86,1.82-3.13,1.9-8.09,6.22-8C702.06,200.07,679.4,198.12,687.11,207.26Z" />
									<path d="M726.44,287.35c-6.77-1.25-15.74,18.37-7.09,17.24C725.52,302.43,734.86,289.49,726.44,287.35Z" />
									<path d="M676.87,217.52c-2.48-13.89-8.65-9-8.58-.22C668.14,219.59,676.53,218.46,676.87,217.52Z" />
									<path d="M753.7,240.67c-2.54-7.48-5.41-14.3-10.86-20.5a56.06,56.06,0,0,0-7.18-7.19c-17.83,3.73-24.3,9-45.48,4.27-2.71-4.14-8.38,2.63-9.53,4.15-.85.5-4.44,2.31-4.81,3.12-.55,2.89,5.34,6,1.82,9a7.84,7.84,0,0,1-4,1.22c-9.43-.13-11.36,5.3-11.92,10.35.48,11,12.69,1.25,16.93-1.65,6.47-2.64,5.35,3.6,8.22,3,5.12-1.24,22.63-4.65,16,5.07-13.25,9-15.93-10.69-35,1.3-11.15-1.69-23.4,8.5-15.33,18.65,5.8,9.29,19.07,4.11,27.05,8.78,4.92,9,2.51,19.76,8.19,28.33a12.37,12.37,0,0,0,3.79,3.12,57.43,57.43,0,0,0,6.74.55c6.64-1.9,12.85-10.16,15.21-16.53,3.59-9.8,2.31-14.54,10.42-22.33,0-6.05,2.53-14.53,10-16,9-.21,10.26,9,17.54,11.44a12.66,12.66,0,0,0,3.83-5.63,53.91,53.91,0,0,0,.45-7A56.51,56.51,0,0,0,753.7,240.67Z" />
								</g>
							</g>
						</g>
						<g id="system-moonlight" class="system-moonlight">
							<circle id="Shadow-2-3" class="moon-shadow-02" cx="700" cy="92.85" r="40" />
							<circle id="Shadow-1-3" class="moon-shadow-01" cx="700" cy="92.85" r="30.66" />
							<g id="moon-system-center">
								<circle id="moon-system-bg" class="moon-center" cx="700" cy="92.85" r="20.47" />
								<g id="moon-pattern" class="moon-pattern">
									<ellipse cx="692.39" cy="81.87" rx="2.95" ry="2.96" />
									<ellipse cx="710.87" cy="101.69" rx="5.17" ry="5.27" transform="translate(607.73 812.35) rotate(-89.88)" />
									<ellipse cx="700.69" cy="103.74" rx="2.24" ry="2.28" transform="translate(595.52 804.22) rotate(-89.88)" />
									<ellipse cx="705.24" cy="94.63" rx="1.39" ry="1.47" transform="translate(609.17 799.68) rotate(-89.88)" />
									<ellipse cx="713.68" cy="93.91" rx="0.59" ry="0.63" transform="translate(618.31 807.4) rotate(-89.88)" />
									<ellipse cx="703.44" cy="78.86" rx="2.49" ry="2.63" transform="translate(623.15 782.14) rotate(-89.88)" />
									<ellipse cx="686.07" cy="99.66" rx="1.21" ry="1.24" transform="matrix(0, -1, 1, 0, 585.01, 785.53)" />
									<ellipse cx="689.2" cy="87.88" rx="1.21" ry="1.22" transform="matrix(0, -1, 1, 0, 599.91, 776.9)" />
									<ellipse cx="694.15" cy="87.54" rx="1.61" ry="1.7" transform="matrix(0, -1, 1, 0, 605.19, 781.51)" />
								</g>
							</g>
						</g>
					</g>
				</g>
			</g>
		</svg>
	
	</div>

</div>


<section class="packages">
	<h2 class="title_packages">Packages</h2>
	<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="images/space-hotel.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/Starship.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/Reentry.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
		  <a href="{{ route('login') }}">
		  <small class="text-muted text-center">Read more</small>
		  </a>
       
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>