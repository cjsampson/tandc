<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['name', 'body'];

    public function keywords()
    {
        return $this->hasMany('App\Models\Keyword');
    }

}
