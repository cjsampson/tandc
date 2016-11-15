<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Keyword extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['name'];

    /**
     * get all articles related to a keyword
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }

    /**
     * get all videos related to a keyword
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function videos()
    {
        return $this->belongsToMany('App\Models\Video');
    }

}
