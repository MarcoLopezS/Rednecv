<?php namespace Rednecv\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class ContactoMensaje extends BaseEntity{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['nombre','apellidos','email','telefono','telefono_whatsapp','mensaje','leido'];

}