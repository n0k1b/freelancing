<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_report extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function post()
    {
        return $this->belongsTo('App\Models\blog_post');
    }
}
