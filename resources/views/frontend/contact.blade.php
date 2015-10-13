@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>

<!-- Content -->
<section class="content-holder1 inner-pages">
	<section class="container">
		<section class="help-holder">
			<article class="left">
				<h2> <span class="txt-left">Blog</span> <span class="bg-right"></span> </h2>
				<section class="row-fluid content-holder">
					<figure class="span8">
						<iframe width="100%" height="300" scrolling="no" frameborder="0" class="map-border" src="https://maps.google.com/?ie=UTF8&amp;ll=-20.234496,57.603722&amp;spn=0.093419,0.169086&amp;t=m&amp;z=13&amp;output=embed" marginwidth="0" marginheight="0"></iframe>
						<section class="row-fluid">
							<figure class="span6">
								<h2>Contact Us</h2>
								<form action="form.php" method="post">
									<ul class="comm-list">
										<li>
											<label>Your Name...</label>
											<input name="name" id="name" type="text" class="comm-field">
										</li>
										<li>
											<label>Your Email...</label>
											<input name="email" id="email" type="text" class="comm-field">
										</li>
										<li>
											<label>Comment</label>
											<textarea name="comments" id="comments" cols="4" rows="20" class="comm-area"></textarea>
										</li>
										<li>
											<input name="" type="submit" class="send-btn" value="Submit">
										</li>
									</ul>
								</form>
							</figure>
							<figure class="span4">
								<h2>Our Address</h2>
								<ul class="contact-list">
									<li class="phone">(+00) 1234 56 789</li>
									<li class="mail"><a href="#">info@crunhpress.com</a></li>
									<li class="address">15th Avenue, 12345, Navada, USA</li>
								</ul>
							</figure>
						</section>
					</figure>
					<figure class="span4">
						<div class="right-holder">
							<div class="right-holder">
								<h3>Categories</h3>
								<ul class="archives">
									<li><a href="#">Art Design</a> <span class="num-post">22</span></li>
									<li><a href="#">Graphic Design</a> <span class="num-post">22</span></li>
									<li><a href="#">Web Design</a> <span class="num-post">22</span></li>
									<li><a href="#">Development</a> <span class="num-post">22</span></li>
									<li><a href="#">Jquery</a> <span class="num-post">22</span></li>
								</ul>
							</div>
						</div>
						<div class="right-holder">
							<h3>Recent Comments</h3>
							<ul class="comments">
								<li> <img src="images/image37.jpg" class="team-img" alt=""/> <a href="#" class="author-name">John says</a>
									<p>Vestibulum facilisis tempor ultricies. Nulla facilisi. Peuismod lacinia. <a href="#">read more</a> </p>
								</li>
								<li> <img src="images/image38.jpg" class="team-img" alt=""/> <a href="#" class="author-name">John says</a>
									<p>Vestibulum facilisis tempor ultricies. Nulla facilisi. Peuismod lacinia. <a href="#">read more</a> </p>
								</li>
								<li> <img src="images/image39.jpg" class="team-img" alt=""/> <a href="#" class="author-name">John says</a>
									<p>Vestibulum facilisis tempor ultricies. Nulla facilisi. Peuismod lacinia. <a href="#">read more</a> </p>
								</li>
							</ul>
						</div>
						<div class="right-holder">
							<h3>FROM OUR GALLERY</h3>
							<ul class="gallery-list side-gallery">
								<li><a href="#"><img src="images/image42.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image43.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image44.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image45.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image46.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image47.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image48.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image42.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image43.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image44.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image45.jpg" alt=""/></a></li>
								<li><a href="#"><img src="images/image46.jpg" alt=""/></a></li>
							</ul>
						</div>
					</figure>
				</section>
			</article>
		</section>
	</section>
</section>
<section class="inner-f-top">
	<section class="container">
		<section class="top">
			<section class="row-fluid">
				<figure class="span3">
					<h2>From The Gallery</h2>
					<ul class="gallery-list">
						<li> <a href="#"> <img src="images/image11.jpg" alt=""/> </a> </li>
						<li> <a href="#"> <img src="images/image12.jpg" alt=""/> </a> </li>
						<li> <a href="#"> <img src="images/image11.jpg" alt=""/> </a> </li>
						<li> <a href="#"> <img src="images/image13.jpg" alt=""/> </a> </li>
						<li> <a href="#"> <img src="images/image14.jpg" alt=""/> </a> </li>
						<li> <a href="#"> <img src="images/image13.jpg" alt=""/> </a> </li>
						<li> <a href="#"> <img src="images/image15.jpg" alt=""/> </a> </li>
						<li> <a href="#"> <img src="images/image16.jpg" alt=""/> </a> </li>
						<li> <a href="#"> <img src="images/image15.jpg" alt=""/> </a> </li>
					</ul>
					<a href="#" class="more-btn2">+ View More</a> </figure>
				<figure class="span3">
					<h2>Our Team</h2>
					<div class="author-img-holder"> <a href="#"> <img src="images/image17.jpg" class="author-img" alt=""/> </a> <strong class="author-name">John Orange</strong> <em>CEO</em> <span>37 years old</span> </div>
					<p>Pellentesque euismod egestas massa, ac vehicula nunc tristique quis. Donec sollicitudin, diam eu vestibulum adipiimperdiet ultricies. <br>
						Dignissim, ante sit amet imperdiet ultricies, felis enim luctus leo, et cursus leo libero in nisi. Donec sit amet ipsum velit, a faucibus purus.</p>
				</figure>
				<figure class="span3 b-post">
					<h2>Latest Blog Post</h2>
					<div class="f-img-holder"> <a href="#"> <img src="images/image18.jpg" class="f-blog-img" alt=""/> </a> <span class="p-date">22 <br>
						May</span> </div>
					<p>Maecenas laoreet lectus est, eget ultricies eros. Aliquam ipsum nunc, tincidunt non fringilla.Maecenas laoreet lectus est, eget ultricies eros. Aliquam ipsum nunc, tincidunt non fringilla.</p>
					<a href="#" class="more-btn2">+ Read More</a> </figure>
				<figure class="span3">
					<h2>Contact Us</h2>
					<form action="form.php" method="post">
						<input name="name" id="name" type="text" class="f-field" value="Name">
						<input name="email" id="email" type="text" class="f-field" value="Email">
						<textarea name="comments" id="comments" cols="4" rows="20" class="f-area">Message</textarea>
						<input name="" type="submit" class="send-btn" value="Send">
					</form>
				</figure>
			</section>
		</section>
	</section>
</section>

@stop