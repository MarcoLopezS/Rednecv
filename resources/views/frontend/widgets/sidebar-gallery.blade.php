<div class="right-holder">

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

</div>