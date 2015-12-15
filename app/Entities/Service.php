<?php namespace Rednecv\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends BaseEntity{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['titulo','slug_url','contenido','user_id'];

    public function user()
    {
        return $this->belongsTo('Rednecv\Entities\User', 'user_id');
    }

} 