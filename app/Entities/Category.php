<?php namespace Rednecv\Entities;

class Category extends BaseEntity{

    protected $fillable = ['titulo','slug_url','publicar'];

    protected $perPage = 10;

    public function user()
    {
        return $this->belongsTo('Rednecv\Entities\User', 'user_id');
    }

    public function post()
    {
        return $this->hasMany('Rednecv\Entities\Post');
    }

} 