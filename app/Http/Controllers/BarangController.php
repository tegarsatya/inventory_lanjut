<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index ()
    {
        $data= Barang::all();
		return view('barang.barang',['data'=>$data]);
    }

    public function create()
	{
		return view ('barang.add');
    }
    
    public function store (Request $Request)
	{
		$data=[
		'barang'=> $Request->barang,];
		Barang::create($data);
		return redirect ('barang.barang');
	}
}
