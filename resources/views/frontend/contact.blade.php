@extends('frontend.layouts.app')

@section('content')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(/frontend/images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Get in touch</h2>
				   					<h1>Contact Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location-2"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">luxehotel.com</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Get In Touch</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="fname">First Name</label>
									<input type="text" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Subject</label>
									<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>

		<div id="map" class="colorlib-map"></div>
	
		<div id="colorlib-subscribe" style="background-image: url(/frontend/images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Sign Up for a Newsletter</h2>
						<p>Get A 50% Discounts in every Rooms, Book now!</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection
@push('maps')
<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="/frontend/js/google_map.js"></script>
@endpush