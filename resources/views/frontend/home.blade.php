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
				   				<div class="slider-text-inner text-center">
				   					<h2>Welcome to the luxehotel</h2>
				   					<h1>A Luxury Hotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(/frontend/images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Discover &amp; Enjoy</h2>
				   					<h1>Everything you need in luxehotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(/frontend/images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>You are invited</h2>
				   					<h1>We know how to please you</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(/frontend/images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Come &amp; enjoy the unforgetable nights</h2>
				   					<h1>In the heart of luxehotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-wrap">
						<form method="post" class="colorlib-form">
		              	<div class="row">
		                <div class="col-md-3">
		                  <div class="form-group">
		                    <label for="date">Check-in:</label>
		                    <div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-3">
		                  <div class="form-group">
		                    <label for="date">Check-out:</label>
		                    <div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="adults">Adults</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">2</option>
		                        <option value="#">3</option>
		                        <option value="#">4</option>
		                        <option value="#">5+</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="children">Children</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">2</option>
		                        <option value="#">3</option>
		                        <option value="#">4</option>
		                        <option value="#">5+</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
		                </div>
		              </div>
		            </form>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-reception"></i>
							</span>
							<h3>24/7 Front Desk</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-herbs"></i>
							</span>
							<h3>Spa Suites</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
							<h3>Transfer Services</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-cheers"></i>
							</span>
							<h3>Restaurant &amp; Bar</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-rooms" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Rooms &amp; Suites</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel owl-carousel2">
							<div class="item">
								<a href="/frontend/images/room-1.jpg" class="room image-popup-link" style="background-image: url(/frontend/images/room-1.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Suite</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">99</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="/frontend/images/room-2.jpg" class="room image-popup-link" style="background-image: url(/frontend/images/room-2.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">199</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="/frontend/images/room-3.jpg" class="room image-popup-link" style="background-image: url(/frontend/images/room-3.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Family Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">249</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Two double beds</li>
										<li><i class="icon-check"></i> Babysitting facilities</li>
										<li><i class="icon-check"></i> 1 free bed available on request</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="/frontend/images/room-4.jpg" class="room image-popup-link" style="background-image: url(/frontend/images/room-4.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Classic Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">150</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="/frontend/images/room-5.jpg" class="room image-popup-link" style="background-image: url(/frontend/images/room-5.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Superior Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">200</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="/frontend/images/room-6.jpg" class="room image-popup-link" style="background-image: url(/frontend/images/room-6.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Superior Family Room</a></h3>
									<p class="price">
										<span class="currency"><small>$</small></span>
										<span class="price-room">299</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center animate-box">
						<a href="#">View all rooms <i class="icon-arrow-right3"></i></a>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Recent Blog</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="blog-flex">
					<div class="video colorlib-video" style="background-image: url(/frontend/images/blog-3.jpg);">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video"></i></a>
						<div class="overlay"></div>
					</div>
					<div class="blog-entry">
						<div class="row">
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(/frontend/images/blog-1.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>A Definitive Guide to the Best Dining</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(/frontend/images/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>How These 5 People Found The Path to Their Dream Trip</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(/frontend/images/blog-3.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>Our Secret Island Boat Tour Is just for You</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box text-right">
								<a href="#">View all blog post <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Our Satisfied Guests says</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(/frontend/images/person2.jpg);"></span>
						<span class="user">Brian Doe</span>
						<small>Satisfied Customer</small>
						<blockquote>
							<p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</blockquote>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(/frontend/images/person1.jpg);"></span>
						<span class="user">Nathalie Miller</span>
						<small>Satisfied Customer</small>
						<blockquote>
							<p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</blockquote>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(/frontend/images/person3.jpg);"></span>
						<span class="user">Shara Jones</span>
						<small>Satisfied Customer</small>
						<blockquote>
							<p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</blockquote>
					</div>
				</div>
			</div>
			</div>
		</div>

	
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