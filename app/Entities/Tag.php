<?php namespace Rednecv\Entities;

class Tag extends BaseEntity{

    protected $fillable = ['titulo','slug_url','publicar'];

    public function user()
    {
        return $this->belongsTo('Rednecv\Entities\User', 'user_id');
    }

} 