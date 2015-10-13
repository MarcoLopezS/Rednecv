@extends('layouts.frontend')

@section('contenido_body')

	<!-- banner -->
	<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>
	
	<!-- Content -->
	<section class="content-holder1 inner-pages">
		<section class="container">
			<section class="help-holder">
				<article class="left">
					<h2> <span class="txt-left">Left Nav</span> <span class="bg-right"></span> </h2>
					<section class="row-fluid">
						<figure class="span3">
							<h3>All Events</h3>
							<ul class="left-col-list">
								<li><a href="#">Left Nav</a> </li>
								<li><a href="#">Right Nav</a> </li>
								<li><a href="#">Left Nav + Left Sidebar</a> </li>
								<li><a href="#">Right Nav</a> </li>
								<li><a href="#">Right Sidebar</a></li>
								<li><a href="#">Right Nav + Right Sidebar</a> </li>
								<li><a href="#">Team</a> </li>
								<li><a href="#">Services</a> </li>
								<li><a href="#">Careers</a> </li>
								<li><a href="#">Contact</a> </li>
								<li><a href="#">Procces</a> </li>
								<li><a href="#">Testimonials</a> </li>
								<li><a href="#">FAQ1</a> </li>
								<li><a href="#">FAQ2</a> </li>
								<li><a href="#">Pricing</a> </li>
								<li><a href="#">Splitted Page</a> </li>
								<li><a href="#">Pass: def345</a></li>
							</ul>
						</figure>
						<figure class="span9">
							<h3>Scandinavian Style Interiors </h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id augue eget mauris sollicitudin malesuada. Nulla facilisi. Nam eleifend facilisis dui at cursus. Nunc lorem sapien, auctor a vestibulum nec, viverra a orci. Vestibulum fringilla lectus et enim ultricies eu ultrices ligula scelerisque.</p>
							<img src="images/image27.jpg" class="content-img2" alt=""/>
							<p>Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<p>Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu, vehicula ac mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
						<div class="author-img-holder"> <img src="images/image17.jpg" class="author-img" alt="/"> <strong class="author-name">John Orange</strong> <em>CEO</em> <span>37 years old</span> </div>
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