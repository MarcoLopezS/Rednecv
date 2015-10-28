<?php namespace Rednecv\Entities;

class Slider extends BaseEntity {
	protected $fillable = ['titulo','slug_url','descripcion','orden','publicar','user_id','published_at'];
}