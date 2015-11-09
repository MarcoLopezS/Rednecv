@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>

<!-- Content -->
<section class="content-holder1 inner-pages">

		<section class="container">

			<section class="help-holder">

				<article class="left">

					<h2><span class="txt-left">Servicios</span> <span class="bg-right"></span> </h2>

					<section class="row-fluid">

						<div id="tabs">
							
							<figure class="span3">

								<ul class="left-col-list">
									@foreach($servicioMenu as $item)
									<li><a href="#{{ $item->slug_url }}">{{ $item->titulo }}</a></li>
									@endforeach

								</ul>

							</figure>

							<figure class="span9">

								@foreach($servicioCont as $item)
								<div id="{{ $item->slug_url }}">

									<h1>{{ $item->titulo }}</h1>

									{!! $item->contenido !!}
									
								</div>
								@endforeach

							</figure>

						</div>              	

					</section>

				</article>

			</section>

		</section>

	</section>

@stop

@section('contenido_footer')

<script>
	var jTabs = jQuery.noConflict();

	jTabs(document).on("ready", function(){

		jTabs("#tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
		jTabs("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");

	});

</script>

@stop