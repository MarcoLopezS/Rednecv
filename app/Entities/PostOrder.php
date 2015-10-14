<?php namespace Rednecv\Entities;

class PostOrder extends BaseEntity{

    protected $fillable = ['titulo','orden'];

    public function user()
    {
        return $this->belongsTo('Rednecv\Entities\User', 'user_id');
    }

    public function post()
    {
        return $this->hasMany('Rednecv\Entities\Post');
    }

} 