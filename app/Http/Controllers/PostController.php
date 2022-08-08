<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(Request $request){
      return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // $request -> all();
        $posts = Post::paginate(15);
Post::create(['id'=>$request['id'],'title'=>$request['title'],'body'=>$request['body'],'user_id'=>$request['user_id']]);
return view('users.create') ;


}

}