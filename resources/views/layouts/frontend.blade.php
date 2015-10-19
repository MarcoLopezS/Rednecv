<!DOCTYPE html>
<html lang="es">
<head>
<title>{{ $conf->titulo }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="description" content="Place your description here">

{{-- Estilos --}}
{!! HTML::style('css/estilos.css') !!}
{!! HTML::style('css/update-responsive.css') !!}

{{-- Slider --}}
{!! HTML::style('css/flexslid.css') !!}

{{-- Bootstrap - FontAwesome--}}
{!! HTML::style('css/bootstrap.css') !!}
{!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}

{{-- Carousel --}}
{!! HTML::style('css/elastislide.css') !!}

<!--[if lt IE 7]>
	{!! HTML::script('js/ie6_script_other.js') !!}
<![endif]-->

<!--[if lt IE 9]>
	{!! HTML::script('js/html5.js') !!}
<![endif]-->
<!-- jquery -->

@yield('contenido_header')

</head>

<body>
	<div class="wrapper">

		<!-- header -->
		<header id="header">
			<section class="container">

				<h1 id="logo">
					<a href="/">{{ $conf->titulo }}</a>
				</h1>

				<nav id="nav">
					<div class="navbar navbar-inverse">
						<div class="navbar-inner">
							<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
							<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li {!! (Request::is('/') ? 'class="active"' : '') !!} ><a href="/">Inicio</a></li>
									<li {!! (Request::is('nosotros*') ? 'class="active"' : '') !!} ><a href="#">Nosotros</a></li>
									<li {!! (Request::is('galeria*') ? 'class="active"' : '') !!} ><a href="#">Galería</a></li>
									<li {!! (Request::is('blog*') ? 'class="active"' : '') !!} ><a href="/blog">Blog</a></li>
									<li {!! (Request::is('contacto*') ? 'class="active"' : '') !!} ><a href="/contacto">Contacto</a></li>
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
					<p>Copyright © 2015. Todos los derechos reservados.</p>
				</figure>
				<ul class="f-icons">
					<li class="fb"><a target="_blank" href="https://www.facebook.com/Rednecv-876483399030783/timeline/">Facebook</a> </li>
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

	@yield('contenido_footer')

</body>
</html>