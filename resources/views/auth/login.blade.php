@extends('layouts.login')

@section('contenido_body')

<!-- BEGIN LOGIN -->
<div class="content">

	<!-- BEGIN LOGIN FORM -->
	{!! Form::open(['url' => '/auth/login', 'method' => 'POST', 'class' => 'login-form']) !!}
		<h3 class="form-title">Iniciar sesión</h3>

		@if (count($errors) > 0)
	        <div class="alert alert-danger">
	        	<button class="close" data-close="alert"></button>
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
	        </div>
	    @endif

		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				{!! Form::email('email', null, ['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email']) !!}
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				{!! Form::password('password', ['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Contraseña']) !!}
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> Recordar
			</label>

			<button type="submit" class="btn green pull-right">
				Iniciar sesión <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="forget-password">
			<h4>¿Olvidaste tu contraseña?</h4>
			<p>no te preocupes, da click <a href="{{ url('password/email') }}" id="forget-password"> aqui </a>para resetear tu contraseña.</p>
		</div>
	{!! Form::close() !!}
	<!-- END LOGIN FORM -->

</div>
<!-- END LOGIN -->

@stop