@extends('layouts.frontend')

{{-- VARIABLES --}}

{{--*/
$blog_imagen = $conf->dominio.'upload/'.$noticia->imagen_carpeta.'800x450/'.$noticia->imagen;
$blog_url = $conf->dominio.'blog/'.$noticia->id.'-'.$noticia->slug_url;
/*--}}

@section('contenido_header')
<!-- Open Graph -->
<meta property="og:title" content='{{ $noticia->titulo  }}'>
<meta property="og:type" content='article' >
<meta property="og:url" content='{{ $blog_url }}' >
<meta property="og:image" content='{{ $blog_imagen }}' >
<meta property="og:site_name" content='{{ $conf->titulo }}' >
<meta property="fb:admins" content='1434798696787255'>
<meta property="og:description" content='{{ $noticia->descripcion }}'>

@stop


@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="/images/404_01.png" alt=""/> </section>

<!-- Content -->
<section class="content-holder1 inner-pages">

	<section class="container">

		<section class="help-holder">

			<article class="left">

				<h2> <span class="txt-left">Blog</span> <span class="bg-right"></span> </h2>

					<section class="row-fluid content-holder">

						<figure class="span8">

							<article class="author-art">

								<div>
									<strong class="title2">{{ $noticia->titulo }}</strong>

									<img src="{{ $blog_imagen }}" class="team-img" alt=""/>

									<div class="contenido">
										{!! $noticia->contenido !!}
									</div>

								</div>

							</article>							

						</figure>

						<figure class="span4">

							@include('frontend.widgets.sidebar-category')

							@include('frontend.widgets.sidebar-gallery')

						</figure>

					</section>

			</article>

		</section>

	</section>

</section>

@stop