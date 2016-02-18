<?php namespace Rednecv\Entities;

class GalleryPhoto extends BaseEntity{

    protected $fillable = ['titulo'];

    public function gallery()
    {
        return $this->belongsTo('Rednecv\Entities\Gallery', 'gallery_id');
    }

} 