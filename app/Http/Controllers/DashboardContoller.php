<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardContoller extends Controller
{
    public function index(){
        $users=[
            [
                "name"=>"kokot",
                "age"=> 17,
            ],
            [
                "name"=>"pica",
                "age"=> 20,
            ],
            [
                "name"=>"jezis",
                "age"=> 3,
            ],
        ];
        $posts = Post::orderBy('likes','desc')->get();

        return view('DashBoard',[
            "users"=>$users,
            "posts"=>$posts
        ]);
    }
}
