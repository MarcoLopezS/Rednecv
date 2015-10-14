@extends('layouts.login')

@section('contenido_body')

<!-- BEGIN LOGIN -->
<div class="content">

	<!-- BEGIN LOGIN FORM -->
	{!! Form::open(['url' => '/password/reset', 'method' => 'POST', 'class' => 'login-form']) !!}
		<h3 class="form-title">Resetear contraseña</h3>
		{!! Form::hidden('token', $token) !!}

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
				{!! Form::email('email', old('email'), ['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email']) !!}
			</div>
		</div>

		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				{!! Form::password('password', ['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Contraseña']) !!}
			</div>
		</div>

		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Repetir contraseña</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				{!! Form::password('password_confirmation', ['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Contraseña']) !!}
			</div>
		</div>

		<div class="form-actions">
			<a href="{{ url('/auth/login') }}" class="btn">
				<i class="m-icon-swapleft"></i> Atrás
			</a>
			
			<button type="submit" class="btn green pull-right">
				Cambiar contraseña <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	{!! Form::close() !!}
	<!-- END LOGIN FORM -->

</div>
<!-- END LOGIN -->

@stop