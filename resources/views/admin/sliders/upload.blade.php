@extends('layouts.admin')

@section('contenido_admin_title')
    Subir fotos
@stop

@section('contenido_header')
{{-- DROPZONE --}}
{!! HTML::style('https://cdnjs.cloudflare.com/ajax/libs/dropzone/3.11.0/css/dropzone.css') !!}
@stop

@section('contenido_admin')

    <div class="row">
        <div class="col-lg-12">

            <div class="portlet box blue-hoki">

                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Slider
                    </div>
                </div>

                <div class="portlet-body">

                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Este plugin sólo funciona en las últimas versiones de Chrome, Firefox, Safari, Opera e Internet Explorer 10.
                    </div>
                    
                    <div class="panel panel-info" style="overflow:auto;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Seleccionar archivos (Medida: 2200px x 900px)</h3>
                        </div>

                        <div class="panel-body" style="padding:0px !important;">
                            <div class="col-md-12" style="padding:30px; float:center;">
                                {!! Form::open(['route' => 'admin.slider.store', 'method' => 'POST', 'class' => 'dropzone']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary">Ver sliders</a>

                </div>

            </div>

        </div>
    </div>

@stop

@section('contenido_footer')
{!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/dropzone/3.11.0/dropzone-amd-module.min.js') !!}
@stop