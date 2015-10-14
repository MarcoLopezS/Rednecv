<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<head>
<meta charset="utf-8"/>
<title>Administrador</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>

{{-- ENLACES EXTERNOS --}}
{!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}
{!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
{!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') !!}

{!! HTML::style('assets/global/plugins/uniform/css/uniform.default.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}

{!! HTML::style('assets/global/plugins/select2/select2.css') !!}
{!! HTML::style('assets/admin/pages/css/login.css') !!}
{!! HTML::style('assets/global/css/components.css') !!}
{!! HTML::style('assets/global/css/plugins.css') !!}
{!! HTML::style('assets/admin/layout/css/layout.css') !!}
{!! HTML::style('assets/admin/layout/css/themes/default.css') !!}
{!! HTML::style('assets/admin/layout/css/custom.css') !!}

<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="login">
<!-- BEGIN LOGO -->
<div class="logo"></div>
<!-- END LOGO -->


@yield('contenido_body')


<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{!! HTML::script('assets/global/plugins/respond.min.js') !!}
{!! HTML::script('assets/global/plugins/excanvas.min.js') !!}
<![endif]-->

{{-- ENLACES EXTERNOS --}}
{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js') !!}
{!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') !!}


{!! HTML::script('assets/global/plugins/jquery-migrate-1.2.1.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery.blockui.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery.cokie.min.js') !!}

{!! HTML::script('assets/global/plugins/uniform/jquery.uniform.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}

{!! HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}
{!! HTML::script('assets/global/plugins/select2/select2.min.js') !!}

{!! HTML::script('assets/global/scripts/metronic.js') !!}
{!! HTML::script('assets/admin/layout/scripts/layout.js') !!}
{!! HTML::script('assets/admin/layout/scripts/quick-sidebar.js') !!}
{!! HTML::script('assets/admin/pages/scripts/login.js') !!}

<script>
	jQuery(document).ready(function() {     
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		QuickSidebar.init() // init quick sidebar
		Login.init();
	});
</script>
<!-- END JAVASCRIPTS -->

</body>

</html>
