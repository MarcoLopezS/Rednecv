@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="/images/404_01.png" alt=""/> </section>

<!-- Content -->
<section class="content-holder1 inner-pages">
	<section class="container">
		<section class="help-holder">
			<article class="left">
				<h2> <span class="txt-left">Blog</span> <span class="bg-right"></span> </h2>
					<section class="row-fluid">
						<figure class="span8">

							@foreach($blog as $item)
							{{--*/
							$imagen = '/upload/'.$item->imagen_carpeta.'110x110/'.$item->imagen;
							$url = '/blog/'.$item->id.'-'.$item->slug_url;
							$url_category = '/blog/'.$item->category->slug_url;
							/*--}}
							<article class="author-art">
								<div class="author-inner">
									<img src="{{ $imagen }}" class="team-img" alt=""/>
									<strong class="title2">
										<a href="{{ $url }}">{{ $item->titulo }}</a>
									</strong>
									<p>{{ $item->descripcion }}</p>
									<br class="clear">
									<div class="blog-bottom">
										<ul class="b-top-links">
											<li>25 Aug, 2012</li>
											<li class="design-icon"><a href="{{ $url_category }}">{{ $item->category->titulo }}</a></li>
										</ul>
									</div>
								</div>
							</article>
							@endforeach

                            <div class="pagination">
                                {!! $blog->appends(Request::all())->render() !!}
                            </div>

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