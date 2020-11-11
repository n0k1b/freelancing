<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_post extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\blog_category');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\blog_comment', 'post_id', 'id');
    }
    public function reports()
    {
        return $this->hasMany('App\Models\post_report', 'post_id', 'id');
    }
}
