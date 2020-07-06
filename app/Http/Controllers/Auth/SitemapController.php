<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
public function index ()
{
	$post = Post::orderBy('update_at','DESC')->first();
	$kategori = Categori::orderBy('update_at','DESC')->first();

	return response()->view('sitemap.index', [
		'post' => $post,
		'kategori'=> $kategori
		])->header('Content-Type','text/xml')
}
}


