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
                "name"=>"pica",
                "age"=> 20,
            ],
            [
                "name"=>"jezis",
                "age"=> 3,
            ],
        ];
        return view('DashBoard',["users"=>$users]);
    }
}
