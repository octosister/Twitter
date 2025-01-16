<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function store(){
        $request = request()->all();

        $validated = request() -> validate([
            "content" =>"required|min:1|max:255",
        ]);

        dump($request);

        Post::create([
            "content" =>$validated["content"],
            "likes" =>0,
        ]);

        return redirect()->route("dashboard.index")->with("success","Post was successfuly created!");
    }
    public function destroy(Post $post){

        $post -> delete();
        return redirect()->route("dashboard.index")->with("success","Post was successfuly deleted!");
    }
    public function show(Post $post){
        return view("inc.post",[
            'post' => $post
        ]);
    }
}
