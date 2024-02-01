<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getAllPosts(){
        $articles = \App\Models\Post::all();
        $categories = \App\Models\Category::withCount('posts')->get();
        return view('frontend.articlesView', ['articles'=>$articles, 'categories' => $categories]);
    }
    public function getOnePost( $id){

        $posts = \App\Models\Post::all();
        $post = $posts->where('id', $id)->first();
        $categories = \App\Models\Category::withCount('posts')->get();

        return view('frontend.oneArticleView', ['article'=> $post, 'categories' => $categories]);
    }

    public function postsWithCategory($id){
        $posts = \App\Models\Post::all();
        $posts = $posts->where('category_id', $id)->all();
        $categories = \App\Models\Category::withCount('posts')->get();

        return view('frontend.articlesView', ['articles'=>$posts, 'categories' => $categories]);
    }
}
