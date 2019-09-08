<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['title', 'author', 'content', 'thumb', 'click', 'istop', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
