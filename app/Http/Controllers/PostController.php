<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function indSex(Post $post)
    {
    return $post->get();
    }
}
