@extends('layouts.admin')

@section('contenido_header')
{{-- DATETIME PICKER --}}
{!! HTML::style('assets/global/plugins/datetimepicker/jquery.datetimepicker.css') !!}
@stop

@section('contenido_admin_title')
    Noticias - Nuevo
@stop

@section('contenido_admin')
<!--main content-->
<div class="row">
    <!--row starts-->
    <div class="col-lg-12">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <!--basic form starts-->
        <div class="portlet box blue-hoki">

            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Noticias - Nuevo
                </div>
            </div>

            <div class="portlet-body form">
                {!! Form::open(['route' => 'admin.post.store', 'method' => 'POST', 'class' => 'form-horizontal form-bordered', 'files' => 'true']) !!}

                    <div class="form-group">
                        {!! Form::label('titulo', 'Titulo', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('titulo', null, ['id' => 'titulo', 'class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="slug_url" class="col-md-3 control-label"><i class="fa fa-spinner fa-pulse progressUrl"></i> URL</label>
                        <div class="col-md-7">
                            {!! Form::text('slug_url', null, ['id' => 'url', 'class' => 'form-control']) !!}                            
                        </div>
                        <div class="col-md-2">
                            <a id="reloadUrl" href="#" class="btn default"> Generar nuevo URL</a>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '3',
                            'onkeydown' => 'limitText(this.form.descripcion,this.form.countdown,220);',
                            'onkeyup' => 'limitText(this.form.descripcion,this.form.countdown,220);']) !!}
                            <span class="help-block">Caracteres permitidos:
                                <strong>
                                    <input name="countdown" type="text" style="border:none; background:none;" value="220" size="3" readonly id="countdown">
                                </strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('contenido', 'Contenido', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::textarea('contenido', null, ['class' => 'form-control ckeditor_full']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('imagen', 'Imagen', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::file('imagen') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('video', 'Video (Youtube)', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                                {!! Form::text('video', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('categoria', 'Categoría', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::select('categoria', ['' => 'Seleccionar'] + $category, $selected, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('published_at', 'Fecha de publicación', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::text('published_at', date('Y-m-d H:i:s'), ['class' => 'form-control col-md-6 datetimepicker']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('publicar', 'Publicar', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            <div class="radio-list">
                                <label class="radio-inline">
                                    {!! Form::radio('publicar', '1', null,  ['id' => 'publicar']) !!}
                                    Si
                                </label>
                                <label class="radio-inline">
                                    {!! Form::radio('publicar', '0', null,  ['id' => 'publicar']) !!}
                                    No
                                </label>
                            </div>                            
                        </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-responsive btn-primary btn-md']) !!}
                            <a href="{{ route('admin.post.index') }}" class="btn btn-responsive btn-default btn-md">Cancelar</a>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
    <!--md-6 ends-->

</div>

{!! Form::open(['route' => 'admin.post.slugUrl', 'method' => 'POST', 'id' => 'formUrl']) !!}
    
    {!! Form::text('ajaxTitulo', null, ['id' => 'ajaxTitulo']) !!}

{!! Form::close() !!}

@stop

@section('contenido_footer')
{{-- CKEDITOR --}}
{!! HTML::script('assets/global/plugins/ckeditor/ckeditor.js') !!}
{!! HTML::script('assets/global/plugins/ckeditor/adapters/jquery.js') !!}
{!! HTML::script('assets/admin/pages/scripts/ckeditor.js') !!}

{{-- DATETIME PICKER --}}
{!! HTML::script('assets/global/plugins/datetimepicker/jquery.datetimepicker.js') !!}
{!! HTML::script('assets/admin/pages/scripts/datetime.js') !!}

{{-- TAGS --}}
{!! HTML::script('assets/global/plugins/tag/jquery.tagsinput.min.js') !!}
{!! HTML::script('assets/global/plugins/tag/jquery.select2.min.js') !!}
<script>
$(".selectMultiple").select2();
</script>

{{-- URL --}}
<script>
$(document).on("ready", function(){
    $(".progressUrl").hide();
    $("#formUrl").hide();

    $("#reloadUrl").on("click", function(){
        generateUrl();
    });

    $("#titulo").one("change", function(){
        generateUrl();
    });

    function generateUrl(){

        var titulo = $("#titulo").val();
        $("#ajaxTitulo").attr('value', titulo);

        var form = $("#formUrl");
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            beforeSend: function(){ 
                $(".progressUrl").show();
            },
            success: function(result){
                $(".progressUrl").hide();
                $('input[name=slug_url]').attr('value', result.url);
            }
        }).fail(function(result){
            console.log(result);
            $(".progressUrl").hide();
        });
    }

});
</script>

@stop