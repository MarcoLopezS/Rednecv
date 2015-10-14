@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner">
	<div class="container_wrap" id="slideshow_big">
		<!-- start header -->
		<div style="position:relative; z-index:2;">
			<div class="flexslider">
				<ul class="slides">
					<li class="slide-image"> <div class="caption">
						<p>1 Lorem dignissim, ante sit amet imperdiet ultricies, felis sit enim luctus leo, et cursus leo libero in nisionec....</p>
						</div> <img src="images/banner-1.jpg" class="attachment-header_image wp-post-image" alt="header4" title="header4"> </li>
					<li class="slide-image"> <div class="caption">
						<p>2 Lorem dignissim, ante sit amet imperdiet ultricies, felis sit enim luctus leo, et cursus leo libero in nisionec....</p>
						</div> <img src="images/banner-2.jpg" class="attachment-header_image wp-post-image" alt="header4" title="header4"> </li>
					<li class="slide-image"> <div class="caption">
						<p>3 Lorem dignissim, ante sit amet imperdiet ultricies, felis sit enim luctus leo, et cursus leo libero in nisionec....</p>
						</div> <img src="images/banner-3.jpg" class="attachment-header_image wp-post-image" alt="header4" title="header4"> </li>
					<li class="slide-image"> <div class="caption">
						<p>5 Lorem dignissim, ante sit amet imperdiet ultricies, felis sit enim luctus leo, et cursus leo libero in nisionec....</p>
						</div> <img src="images/banner-5.jpg" class="attachment-header_image wp-post-image" alt="header4" title="header4"> </li>
				</ul>
			</div>
		</div>
		<!-- end header -->
	</div>
</section>

<!-- Content -->
<section class="content-holder1">
	<section class="container">
		<section class="service-tabs">
			<section class="row-fluid">
				<figure class="span3">
					<h3>Who we are</h3>
					<span class="s-icon"><img src="images/image03.png" alt=""></span>
					<p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. quasi architecto beatae vitae dicta sunt explicabo.</p>
				</figure>
				<figure class="span3">
					<h3>What we do</h3>
					<span class="s-icon"><img src="images/image04.png" alt=""></span>
					<p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. quasi architecto beatae vitae dicta sunt explicabo.</p>
				</figure>
				<figure class="span3">
					<h3>Save environment</h3>
					<span class="s-icon"><img src="images/image05.png" alt=""></span>
					<p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. quasi architecto beatae vitae dicta sunt explicabo.</p>
				</figure>
				<figure class="span3">
					<h3>ReUse Your Trash</h3>
					<span class="s-icon"><img src="images/image06.png" alt=""></span>
					<p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. quasi architecto beatae vitae dicta sunt explicabo.</p>
				</figure>
			</section>
		</section>
	</section>
</section>

<section class="content-holder1 footer-top">
	<section class="container">
		<section class="top">
			<section class="row-fluid">
				<figure class="span3">
					<h2>From The Gallery</h2>
					<ul class="gallery-list">
						<li> <a href="#"> <img src="images/image11.jpg" alt=""> </a> </li>
						<li> <a href="#"> <img src="images/image12.jpg" alt=""> </a> </li>
						<li> <a href="#"> <img src="images/image11.jpg" alt=""> </a> </li>
						<li> <a href="#"> <img src="images/image13.jpg" alt=""> </a> </li>
						<li> <a href="#"> <img src="images/image14.jpg" alt=""> </a> </li>
						<li> <a href="#"> <img src="images/image13.jpg" alt=""> </a> </li>
						<li> <a href="#"> <img src="images/image15.jpg" alt=""> </a> </li>
						<li> <a href="#"> <img src="images/image16.jpg" alt=""> </a> </li>
						<li> <a href="#"> <img src="images/image15.jpg" alt=""> </a> </li>
					</ul>
					<a href="#" class="more-btn2">+ View More</a> </figure>
				<figure class="span3">
					<h2>Our Team</h2>
					<div class="author-img-holder"> <img src="images/image17.jpg" class="author-img" alt="" /> <strong class="author-name">John Orange</strong> <em>CEO</em> <span>37 years old</span> </div>
					<p>Pellentesque euismod egestas massa, ac vehicula nunc tristique quis. Donec sollicitudin, diam eu vestibulum adipiimperdiet ultricies. <br>
						Dignissim, ante sit amet imperdiet ultricies, felis enim luctus leo, et cursus leo libero in nisi. Donec sit amet ipsum velit, a faucibus purus.</p>
				</figure>
				<figure class="span3 b-post">
					<h2>Latest Blog Post</h2>
					<div class="f-img-holder"> <a href="#"><img src="images/image18.jpg" class="f-blog-img" alt="" /></a> <span class="p-date">22 <br>
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