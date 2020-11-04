<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function createBlogPost(Request $Request)
    {
        file_put_contents('text.txt',$Request->all());
    }
}
