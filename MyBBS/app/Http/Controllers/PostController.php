<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
private $posts = [
    'Title A',
    'Title B',
    'Title C',
];

 public function index()
 {
    return view('index')->with(['posts' => $this->posts]);//withを使用してpostsという名前で$postsの配列のデータをindexへ渡す
 }

 public function show($id)
 {
    return view('posts.show')->with(['post' => $this->posts[$id]]);
 }
}