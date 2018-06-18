<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Hero extends Model
{
    public function image()
    {
        return $this->belongsToMany('Image','hero_image');
    }
}