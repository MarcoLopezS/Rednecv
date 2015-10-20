@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>

<!-- Content -->
<section class="content-holder1 inner-pages">
	<section class="container">
		<section class="help-holder">
			<article class="left">
				<h2> <span class="txt-left">Contacto</span> <span class="bg-right"></span> </h2>
				<section class="row-fluid content-holder">
					<figure class="span8">
						
						<iframe width="100%" height="300" scrolling="no" frameborder="0" class="map-border" src="https://maps.google.com/?ie=UTF8&amp;ll=-20.234496,57.603722&amp;spn=0.093419,0.169086&amp;t=m&amp;z=13&amp;output=embed" marginwidth="0" marginheight="0"></iframe>
						
						<section class="row-fluid">
							<figure class="span12">
								<h2>Contacto</h2>
								<form action="form.php" method="post">
									<ul class="comm-list">
										<li>
											<label>Nombre</label>
											<input name="name" id="name" type="text" class="comm-field">
										</li>
										<li>
											<label>Email</label>
											<input name="email" id="email" type="text" class="comm-field">
										</li>
										<li>
											<label>Mensaje</label>
											<textarea name="comments" id="comments" cols="4" rows="20" class="comm-area"></textarea>
										</li>
										<li>
											<input name="" type="submit" class="send-btn" value="Submit">
										</li>
									</ul>
								</form>
							</figure>
						</section>
					</figure>

					<figure class="span4">

						<h2>Dirección</h2>
						<ul class="contact-list">
							<li class="phone">(+00) 1234 56 789</li>
							<li class="mail"><a href="#">info@crunhpress.com</a></li>
							<li class="address">15th Avenue, 12345, Navada, USA</li>
						</ul>

					</figure>

				</section>
			</article>
		</section>
	</section>
</section>

@stop