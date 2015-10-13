@extends('layouts.frontend')

@section('contenido_body')

	<!-- banner -->
	<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>
	<!-- Content -->
	<section class="content-holder1 inner-pages">
		<section class="container">
			<section class="help-holder">
				<article class="left">
					<h2> <span class="txt-left">Team</span> <span class="bg-right"></span> </h2>
					<img src="images/image23.jpg" class="content-img" alt=""/>
					<h3>Johnson Robbins</h3>
					<span class="status">Status</span>
					<p>Nam et leo volutpat velit sodales iaculis a consectetur dolor. Vestibulum auctor molestie lacinia. Fusce tortor nunc, mattis ut dignissim et, euismod at orci. Duis luctus semper tellus a facilisis. Sed vel dolor justo. Aliquam erat volutpat. Nam eget ligula vitae nulla posuere ornare id sed est. Integer vitae tellus quis lectus posuere sollicitudin. Sed et nulla id nunc adipiscing congue ac sit amet nunc. Suspendisse porta massa id felis rutrum luctus condimentum libero ultrices.</p>
					<br class="clear">
					<section class="row-fluid">
						<figure class="span6 first"> <img class="team-img" src="images/image37.jpg" alt=""/> <strong class="title-1">Kim Kennedy</strong> <em class="cat-title">Owner </em>
							<p>In vitae arcu enim. Ut ac orci quis orci vestibulum adipiscingamet, consectetur adipiscing elit....</p>
						</figure>
						<figure class="span6"><img class="team-img" src="images/image38.jpg" alt=""/><strong class="title-1">Grey Kooper</strong> <em class="cat-title">Manager</em>
							<p>In vitae arcu enim. Ut ac orci quis orci vestibulum adipiscingamet, consectetur adipiscing elit.....</p>
						</figure>
						<figure class="span6 first"><img class="team-img" src="images/image39.jpg" alt=""/><strong class="title-1">Simon Miller</strong> <em class="cat-title">Senior Developer</em>
							<p>In vitae arcu enim. Ut ac orci quis orci vestibulum adipiscingamet, consectetur adipiscing elit....</p>
						</figure>
						<figure class="span6 "><img class="team-img" src="images/image40.jpg" alt=""/><strong class="title-1">Sean Black</strong> <em class="cat-title">Designer</em>
							<p>In vitae arcu enim. Ut ac orci quis orci vestibulum adipiscingamet, consectetur adipiscing elit....</p>
						</figure>
						<figure class="span6 first"><img class="team-img" src="images/image37.jpg" alt=""/><strong class="title-1">Jonny Wills</strong> <em class="cat-title">Developer</em>
							<p>In vitae arcu enim. Ut ac orci quis orci vestibulum adipiscingamet, consectetur adipiscing elit....</p>
						</figure>
						<figure class="span6 "><img class="team-img" src="images/image38.jpg" alt=""/><strong class="title-1">Mandy Siara</strong> <em class="cat-title ">Designer</em>
							<p>In vitae arcu enim. Ut ac orci quis orci vestibulum adipiscingamet, consectetur adipiscing elit....</p>
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