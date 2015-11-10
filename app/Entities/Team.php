<?php namespace Rednecv\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends BaseEntity{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['titulo','slug_url','cargo','descripcion','contenido'];

} 