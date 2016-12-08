<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Video extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'title', 'description', 'cover_image', 'author', 'url', 'slug'
    ];


    /**
     * get all keywords related to an article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function keywords()
    {
        return $this->belongsToMany('App\Models\Keyword');
    }
}
