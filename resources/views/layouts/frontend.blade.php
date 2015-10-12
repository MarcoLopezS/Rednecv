<!DOCTYPE html>
<html lang="es">
<head>
<title>Green Theme - Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="description" content="Place your description here">

{{-- Estilos --}}
{!! HTML::style('css/style.css') !!}
{!! HTML::style('css/update-responsive.css') !!}

{{-- Slider --}}
{!! HTML::style('css/flexslid.css') !!}

{{-- Bootstrap - FontAwesome--}}
{!! HTML::style('css/bootstrap.css') !!}
{!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}

{{-- Carousel --}}
{!! HTML::style('css/elastislide.css') !!}

{{-- Skin --}}
{!! HTML::style('css/default.css') !!}

<!--[if lt IE 7]>
	{!! HTML::script('js/ie6_script_other.js') !!}
<![endif]-->

<!--[if lt IE 9]>
	{!! HTML::script('js/html5.js') !!}
<![endif]-->
<!-- jquery -->
</head>

<body id="home">
	<div class="wrapper">

		<!-- header -->
		<header id="header">
			<section class="container">

				<h1 id="logo"><a href="index.html">Green Peas</a></h1>

				<nav id="nav">
					<div class="navbar navbar-inverse">
						<div class="navbar-inner">
							<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
							<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li class="active"><a href="index.html">Home</a></li>
									<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Company <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="career.html">Career</a></li>
										<li><a href="team.html">Our Team</a></li>
										<li><a href="author.html">author</a></li>
										</ul>
									</li>
									<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="gallery-2col.html">Gallery 2 column</a></li>
										<li><a href="gallery-3col.html">Gallery 3 column</a></li>
										<li><a href="gallery-4col.html">Gallery 4 column</a></li>
										<li><a href="right-bar-gallery.html">Right Bar Gallery</a></li>
										</ul>
									</li>
									<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Blog <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-detail.html">Blog Detail</a></li>
										<li><a href="blog-double-sidebar.html">Blog Double Sidebar</a></li>
										</ul>
									</li>
									<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Features <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="password_protected.html">Password Protected</a></li>
										<li><a href="password_protected2.html">password protected 2</a></li>
										<li><a href="search-result.html">Search Result</a></li>
											<li><a href="shotcodes.html">ShortCodes</a></li>
											<li><a href="404.html">404 Page</a></li>
											<li><a href="faq.html">faq</a></li>
											<li><a href="left-nav.html">Left Nav</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<!--/.nav-collapse -->
						</div>
						<!-- /.navbar-inner -->
					</div>
					<!-- /.navbar -->
				</nav>
			</section>
		</header>

		@yield('contenido_body')

		<!-- footer -->
		<footer id="footer">
			<section class="container">
				<figure class="copy-right">
					<p>Copyright © 2012. All rights reserved. Designed by <a href="http://crunchpress.com/">CrunchPress.com</a></p>
				</figure>
				<ul class="f-icons">
					<li class="fb"><a href="#">Facebook</a> </li>
					<li class="flicker"><a href="#">Flicker</a> </li>
					<li class="tweeter"><a href="#">Tweeter</a> </li>
					<li class="skype"><a href="#">Skype</a> </li>
					<li class="linkdin"><a href="#">LinkdIn</a> </li>
				</ul>
			</section>
		</footer>

	</div>
	
	{{-- jQuery --}}
	{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js') !!}
	
	{{-- Modernizr --}}
	{!! HTML::script('js/modernizr.custom.17475.js') !!}

	{{-- Clear Input --}}
	{!! HTML::script('js/focus.js') !!}
	
	{{-- Bootstrap --}}
	{!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/2.3.1/js/bootstrap.min.js') !!}

	{{-- Carousel --}}
	{!! HTML::script('js/jquery.elastislide.js') !!}
	<script type="text/javascript">
		$( '#carousel' ).elastislide();
	</script>
	
	{!! HTML::script('js/slider.js') !!} 	{{-- FlexiSlider --}}
	{!! HTML::script('js/cockies.js') !!} 	{{-- jQuery Cookie --}}

</body>
</html>