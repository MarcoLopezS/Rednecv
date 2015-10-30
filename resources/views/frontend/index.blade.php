@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner">
	<div class="container_wrap" id="slideshow_big">
		<!-- start header -->
		<div style="position:relative; z-index:2;">
			<div class="flexslider">
				<ul class="slides">
					
					@foreach($slider as $item)
					{{--*/
					$imagen = '/upload/'.$item->imagen_carpeta.'2200x900/'.$item->imagen;
					/*--}}
					<li class="slide-image">
						<div class="caption">
							<p>{{ $item->titulo }}</p>
						</div>
						<img src="{{ $imagen }}" class="attachment-header_image wp-post-image" alt="{{ $item->titulo }}">
					</li>
					@endforeach

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
					<h2>Galería de Fotos</h2>
					<ul class="gallery-list">
						
						@foreach($fotos as $item)
						{{--*/
						$fotos_imagen = '/upload/'.$item->imagen_carpeta.'63x40/'.$item->imagen;
						/*--}}
						<li><a href="/galeria"><img src="{{ $fotos_imagen }}" alt=""></a></li>						
						@endforeach

					</ul>
					<a href="/galeria" class="more-btn2">+ Ver más</a>
				</figure>

				<figure class="span3">
					<h2>Nuestro Equipo</h2>
					<div class="author-img-holder">
						<img src="/imagenes/nathaly-canales.jpg" class="author-img" alt="Nathaly Canales" />
						<strong class="author-name">Nathaly Canales</strong>
					</div>
					<p>Pellentesque euismod egestas massa, ac vehicula nunc tristique quis. Donec sollicitudin, diam eu vestibulum adipiimperdiet ultricies. <br> Dignissim, ante sit amet imperdiet ultricies, felis enim luctus leo, et cursus leo libero in nisi. Donec sit amet ipsum velit, a faucibus purus.</p>
				</figure>

				<figure class="span3 b-post">
					<h2>Blog</h2>
					{{--*/
					$blog_titulo = $noticia->titulo;
					$blog_contenido = $noticia->descripcion;
					$blog_imagen = '/upload/'.$noticia->imagen_carpeta.'222x100/'.$noticia->imagen;
					$blog_url = '/blog/'.$noticia->id.'-'.$noticia->slug_url;
					/*--}}

					<div class="f-img-holder">
						<a href="{{ $blog_url }}">
							<img src="{{ $blog_imagen }}" class="f-blog-img" alt="{{ $blog_titulo }}" />
						</a>
					</div>

					<p><strong><a href="{{ $blog_url }}" >{{ $blog_titulo }}</a></strong></p>

					<p>{{ $blog_contenido }}</p>

					<a href="{{ $blog_url }}" class="more-btn2">+ Leer más</a>
				</figure>

				<figure class="span3">
					<h2>Contactanos</h2>
					{!! Form::open(['route' => 'frontend.contacto.post', 'method' => 'POST', 'id' => 'contactForm']) !!}

						<div class="contact-content text-justify"></div>

						{!! Form::text('nombre', null, ['class' => 'f-field', 'id' => 'nombre', 'placeholder' => 'Nombre']) !!}
						{!! Form::email('email', null, ['class' => 'f-field', 'id' => 'email', 'placeholder' => 'Email']) !!}
						{!! Form::textarea('mensaje', null, ['class' => 'f-area', 'placeholder' => 'Mensaje', 'cols' => '4', 'rows' => '20']) !!}
						<a id="formContactoSubmit" href="#" class="send-btn">Enviar mensaje</a>

					{!! Form::close() !!}
				</figure>

			</section>
		</section>
	</section>
</section>

@stop

@section('contenido_footer')

{!! HTML::script('js/contacto.js') !!}

@stop