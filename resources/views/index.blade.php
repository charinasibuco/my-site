@extends('template.layout')
@section('content')
@include('template.front-banner')
{{--  @include('template.navigation') --}}
<div class="container">
	<div class="row box">
		<div class="col-sm-12 text-center">
			<h2 class="title-header">WELCOME TO MY SITE!</h2>
			<h5 class="title-header">This is my personal website. I summarize here my skills, portfolio, personal details and other information about myself.</h5> 
			<br>
			{{--< p>I'm an experienced PHP Developer (Laravel Framework and CodeIgniter Framework) for more than 2 years.I do my work not just for money only but also it's my desire to code and passion to create a Project that can help automate and do process easily.

			I also have a great experience on JavaScript/JQuery and Ajax together with HTML and PHP. I also have experience how to create an API for several projects.

			Analyze how to solve the problem before coding is what I practice most, designing database structure correctly is really import before doing any project.I also made my code readable because it is very important especially when we are working as a team.It is also important to have a flexible code, as we all know that Scope and Limitation of the project sometimes cannot be met or change suddenly. Having best practices in coding is very important to have an effective and efficient team or individual towards the project.</p> --}}
		</div>
	</div>
{{-- 	<div class="row box">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" align="center">
			<button class="btn btn-default">VIEW MY PORTFOLIO</button>
		</div>
		<div class="col-sm-4"></div>
	</div> --}}
	<div class="row" style="margin:20px 150px 20px 150px">
		<div class="col-sm-4" align="center" id="personal_details">
				<div class="section" >
					<div style="position:absolute; margin-left:-30px; padding-top:50px">
						<a href="" ><img src="{{ url('images/fb-icon.png')}}" class="icon"></a><br><br>
						<a target="_blank"  href="https://www.linkedin.com/in/charina-sibuco-48237a115/"><img src="{{ url('images/linkedin.png')}}" class="icon"></a>
					</div>
					<h2>Personal Details</h2>
					<i class="fa fa-id-card-o box" aria-hidden="true"></i>
				</div>
		</div>
		<div class="col-sm-4" align="center" id="education">
			<div class="section">
				<div style="position:absolute; margin-left:-30px; padding-top:50px">
					<a target="_blank" href="https://www.facebook.com/csibuco/about?lst=100001920603337%3A100001920603337%3A1505467911&section=education&pnref=about"><img src="{{ url('images/fb-icon.png')}}" class="icon"></a><br><br>
					<a target="_blank"  href="https://www.linkedin.com/in/charina-sibuco-48237a115/"><img src="{{ url('images/linkedin.png')}}" class="icon"></a>
				</div>
				<h2>Education</h2>
				<i class="fa fa-graduation-cap box" aria-hidden="true"></i>
			</div>
		</div>
		<div class="col-sm-4" align="center" id="experience">
			<div class="section ">
				<div style="position:absolute; margin-left:-30px; padding-top:50px">
					<a target="_blank" href="https://www.facebook.com/csibuco/about?lst=100001920603337%3A100001920603337%3A1505467911&section=education&pnref=about"><img src="{{ url('images/fb-icon.png')}}" class="icon"></a><br><br>
					<a target="_blank"  href="https://www.linkedin.com/in/charina-sibuco-48237a115/"><img src="{{ url('images/linkedin.png')}}" class="icon"></a>
				</div>
				<h2>Experience</h2>
				<i class="fa fa-briefcase box" aria-hidden="true"></i>
			</div>
		</div>
	</div>
	<div class="row box">
		<div id="bars">
			<div class="bar" data-percent="95">
				<h3>HTML5</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="95">
				<h3>BOOTSTRAP</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="95">
				<h3>CSS</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="88">
				<h3>PHP</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="75">
				<h3>JAVA</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="90">
				<h3>CODEIGNITER</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="95">
				<h3>LARAVEL</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="90">
				<h3>JAVASCRIPT/JQuery</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="80">
				<h3>C++</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
			<div class="bar" data-percent="85">
				<h3>SQL</h3>
				<canvas class="bar-circle" width="70" height="70"></canvas>
			</div>
		</div>	
	</div>
	<div class="row box">
		<div class="col-sm-12">
			<h2>My Portfolio</h2>
			<div class="row box">
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/hact.jpg')}}">
				</div>
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/roboplanner.jpg')}}">
				</div>
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/cocard.jpg')}}">
				</div>
			</div>
			<div class="row box">
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/magen.jpg')}}">
				</div>
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/arka.jpg')}}">
				</div>
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/hinsonfaulk.jpg')}}">
				</div>
			</div>
			<div class="row box">
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/rosa.jpg')}}">
				</div>
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/negrense.jpg')}}">
				</div>
				<div class="col-sm-4 panel-image center-position-item">
					<img src="{{ url('images/delima.jpg')}}">
				</div>
			</div>
		</div>
	</div>
	<div class="row box">
		<h2>Contact Me</h2>
		<div class="col-sm-6">
			<form class="message" method="post" action="">
				<div class="row">
					<div class="col-sm-12">
						<label>Name:</label>
						<input type="text" class="form-control" name="name">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label>Email:</label>
						<input type="text" class="form-control" name="name">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label>Subject:</label>
						<input type="text" class="form-control" name="name">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label>Message:</label>
						<textarea class="form-control" rows="5"></textarea>
					</div>
				</div>
				<div class="row" style="margin-top:15px">
					<div class="col-sm-6">
						<div class="g-recaptcha" data-sitekey="6LdnwjAUAAAAAOi2rqKb5yp0Ebg5W9hhO9tGnBAC"></div>
					</div>
					<div class="col-sm-6">
						<input type="submit" class="btn btn-default" value="Send">
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-6">
			<div style='overflow:hidden;height:400px;width:520px;'>	
				<div id='gmap_canvas' style='height:400px;width:520px;'></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
			</div>
		</div>
	</div>
</div>
@include('template.footer')
@endsection
@section('script')
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyADrEUMr3Bt-p9zO_wXFAmtQvNg5MWLqZ4'></script>

<a href='https://add-map.com/'>add bing map to website</a> 
<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d91334cf93894e8fe74a6fc2af1d197175176203'></script>
<script type='text/javascript'>function init_map(){var myOptions = {zoom:5,center:new google.maps.LatLng(10.6344115,122.95221790000005),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(10.6344115,122.95221790000005)});infowindow = new google.maps.InfoWindow({content:'<strong>Alijis</strong><br>Purok Himaya Brgy. Alijis <br> Bacolod Negros Occidental Philippines<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
