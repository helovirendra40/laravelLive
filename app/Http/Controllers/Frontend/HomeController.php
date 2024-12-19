<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        $recentposts =  Post::select('categories.*', 'posts.*', 'posts.title as name')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->where('posts.status', true)
        ->orderBy('posts.id', 'DESC')
        ->paginate(10);
        $banners=Banner::select('banner.*');
        $featuredposts = Post::with(["category", "user"])->where("status", true)->where("is_featured", true)->orderBy("id", "DESC")->limit(10)->get();
        // $categories = Category::with('posts')->where("status", true)->orderBy("title", "ASC")->limit(10)->get();
        $categories =  Category::select('categories.*', 'posts.title as name')->join('posts', 'categories.id', '=', 'posts.category_id')->orderBy("title", "ASC")->limit(10)->get();
        $banners = Banner::where("status", true)->orderBy("title", "ASC")->limit(10)->get();
        return view("frontend.home.index", compact("recentposts", "featuredposts", "categories","banners"));
    }
}
