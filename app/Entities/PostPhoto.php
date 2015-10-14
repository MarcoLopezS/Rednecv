<?php namespace Rednecv\Entities;

class PostPhoto extends BaseEntity {
    protected $fillable = ['titulo'];

    public function post()
    {
        return $this->belongsTo('Rednecv\Entities\Post', 'post_id');
    }
} 