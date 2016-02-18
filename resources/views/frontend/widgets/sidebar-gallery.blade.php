<div class="right-holder">

	<h2>Galería de Fotos</h2>
	<ul class="gallery-list">
		
		@foreach($fotos as $item)
		{{--*/
		$fotos_imagen = '/upload/'.$item->imagen_carpeta.'63x40/'.$item->imagen;
		$fotos_url = '/galeria/'.$item->gallery->id.'-'.$item->gallery->slug_url;
		/*--}}
		<li><a href="{{ $fotos_url }}"><img src="{{ $fotos_imagen }}" alt=""></a></li>
		@endforeach

	</ul>
	<a href="/galeria" class="more-btn2">+ Ver más</a>

</div>