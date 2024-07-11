<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class postController extends Controller
{
    public function index(){
        return view('posts.index');
    }


    public function create(){
        return view('posts.create');
    }


    public function show(){

        $response  =  Http::get('https://jsonplaceholder.typicode.com/users');
        $posts = $response ->json();
        return view('posts.show', compact('posts'));
    }

}
