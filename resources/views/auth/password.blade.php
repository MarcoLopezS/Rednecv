@extends('layouts.login')

@section('contenido_body')

<!-- BEGIN LOGIN -->
<div class="content">

	<!-- BEGIN LOGIN FORM -->
	{!! Form::open(['url' => '/password/email', 'method' => 'POST', 'class' => 'login-form']) !!}
		<h3>¿Olvidaste tu contraseña?</h3>
		<p>Ingresa tu email para resetear tu contraseña.</p>

		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif

		@if (count($errors) > 0)
	        <div class="alert alert-danger">
	        	<button class="close" data-close="alert"></button>
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
	        </div>
	    @endif

	    <div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
			</div>
		</div>

		<div class="form-actions">
			<a href="{{ url('/auth/login') }}" class="btn">
				<i class="m-icon-swapleft"></i> Atrás
			</a>
			
			<button type="submit" class="btn green pull-right">
				Enviar <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		
	{!! Form::close() !!}
	<!-- END LOGIN FORM -->

</div>
<!-- END LOGIN -->

@stop