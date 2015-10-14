<?php namespace Rednecv\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends BaseEntity{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['titulo','descripcion','contenido','imagen','imagen_carpeta','publicar','category_id','post_order_id','published_at','user_id'];

    public function user()
    {
        return $this->belongsTo('Rednecv\Entities\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('Rednecv\Entities\Category', 'category_id');
    }

    public function postOrder()
    {
        return $this->belongsTo('Rednecv\Entities\PostOrder', 'post_order_id');
    }

    public function postPhoto()
    {
        return $this->hasMany('Rednecv\Entities\PostPhoto');
    }

    public function postHistory()
    {
        return $this->hasMany('Rednecv\Entities\PostHistory');
    }

    public function postUserDelete()
    {
        return $this->hasMany('Rednecv\Entities\PostHistory')->whereType('delete')->orderBy('created_at', 'desc')->first();
    }

    public function scopeCategory($query, $categoria)
    {
        $categorias = Category::all()->lists('titulo', 'id');

        if($categoria != "" && isset($categorias[$categoria]))
        {
            $query->where('category_id', $categoria);
        }
    }

} 