<?php namespace Rednecv\Entities;

use Illuminate\Database\Eloquent\Model;

class BaseEntity extends Model {

    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != "")
        {
            $query->where('nombre', 'LIKE', "%$nombre%");
        }
    }

	public function scopeTitulo($query, $titulo)
    {
        if(trim($titulo) != "")
        {
            $query->where('titulo', 'LIKE', "%$titulo%");
        }           
    }

    public function scopePublicar($query, $publicar)
    {
        if($publicar != "")
        {
            $query->where('publicar', $publicar);
        }
    }

    public function scopeDatefrom($query, $from)
    {
        if($from != "")
        {
            $query->where('created_at', '>', $from);
        }
    }

    public function scopeDateto($query, $to)
    {
        if($to != "")
        {
            $query->where('created_at', '<', $to);
        }
    }

}