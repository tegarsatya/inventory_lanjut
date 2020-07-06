<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Redirect;

class SupplierController extends Controller
{
   public function index()
	{   $data= Supplier::all();
		return view('supplier.supplier-index',['data'=>$data]);
	}
	public function create()
	{
		return view ('supplier.add');
	}
	public function store (Request $Request)
	{
		$data=[
		'id'=> $Request->id,
		'nama'=> $Request->nama,
		'alamat'=> $Request->alamat,
		'email'=> $Request->email,
		'telp'=> $Request->telp,
		];
		Supplier::create($data);
		return redirect ('supplier.supplier-index');
	}
	public function edit($id)
	{
		$data = Supplier::find($id);
		return view('supplier.edit',[
		 'value' => $data
		 ]);
	}
	public function update($id, Request $Request)
	{
		$data = Supplier::find($id);
		$data->update([
		'id'=> $Request->id,
		'nama'=> $Request->nama,
		'alamat'=> $Request->alamat,
		'email'=> $Request->email,
		'telp'=> $Request->telp,
			]);
		return redirect ('supplier.supplier-index');
	}
	public function destroy($id)
	{
		$data = Supplier::find($id);
		$data->delete();
		return redirect ('supplier.supplier-index');

	}
}
