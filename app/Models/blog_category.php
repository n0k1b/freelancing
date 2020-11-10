<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function posts()
    {
        return $this->hasMany('App\Models\blog_post', 'post_id', 'id');
    }
}
