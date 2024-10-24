<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardContoller extends Controller
{
    public function index(){
        $users=[
            [
                "name"=>"kokot",
                "age"=> 17,
            ],
            [
                "name"=>"meno 2",
                "age"=> 20,
            ],
            [
                "name"=>"meno 3",
                "age"=> 3,
            ],
        ];
        return view('DashBoard',["users"=>$users]);
    }
}
