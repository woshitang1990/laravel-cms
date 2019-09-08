<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['title','author','content','thumb','click','iscommend'];
}
