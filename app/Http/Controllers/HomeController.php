<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{

	public function index(){
		return view('post.home');
	}
    public function post(){
    	$datas = Post::all();
        return view('post.ajax', compact('datas'));
    }
}
