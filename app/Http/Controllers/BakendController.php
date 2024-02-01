<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class BakendController extends Controller
{
    public function getAllPosts(){
        $articles = Post::all();

        return view('backend.adminArticles', ['articles'=>$articles]);
    }
}
