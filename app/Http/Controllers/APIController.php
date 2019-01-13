<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class APIController extends Controller
{
        public function getData()
    {
        $data = Post::select('id', 'namaLokasi', 'deskripsiLokasi', 'telp');
        return datatables($data)->make(true);
    }
}
