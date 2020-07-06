<?php 




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;
use Redirect;

class CategoriController extends Controller
{


	public function index()
	{   $data= Categori::all();
		return view('categori.categori-index',['data'=>$data]);
	}
	public function create()
	{
		return view ('categori.add');
	}
	public function store (Request $Request)
	{
		$data=[
		'categori'=> $Request->categori,];
		Categori::create($data);
		return redirect ('categori.categori-index');
	}
	public function edit($id)
	{
		$data = Categori::find($id);
		return view('categori.edit',[
		 'value' => $data
		 ]);
	}
	public function update($id, Request $Request)
	{
		$data = Categori::find($id);
		$data->update([
			'categori'=>$Request->categori,
			]);
		return redirect ('categori.categori-index');
	}
	public function destroy($id)
	{
		$data = Categori::find($id);
		$data->delete();
		return redirect ('categori.categori-index');

	}
}