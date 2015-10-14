<?php namespace Rednecv\Entities;

class PostHistory extends BaseEntity{

    protected $fillable = ['post_id','user_id'];

    public function user()
    {
        return $this->belongsTo('Rednecv\Entities\User', 'user_id');
    }

    public function post()
    {
        return $this->belongsTo('Rednecv\Entities\Post', 'post_id');
    }

} 