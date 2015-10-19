<div class="right-holder">

	<div class="right-holder">

		<h3>Categories</h3>

		<ul class="archives">

			@foreach($category as $item)
			{{--*/
			$url = '/blog/'.$item->slug_url;
			/*--}}

			<li><a href="{{ $url }}">{{ $item->titulo }}</a></li> 

			@endforeach

		</ul>

	</div>

</div>