<?php 




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;
use Redirect;

class SatuanController extends Controller
{


	public function index()
	{   $data= Satuan::all();
		return view('satuan.satuan-index',['data'=>$data]);
	}
	public function create()
	{
		return view ('satuan.add');
	}
	public function store (Request $Request)
	{
		$data=[
		'id'=>$Request->id,
		'satuan'=> $Request->satuan,];
		Satuan::create($data);
		return redirect ('satuan.satuan-index');
	}
	public function edit($id)
	{
		$data = Satuan::find($id);
		return view('satuan.edit',[
		 'value' => $data
		 ]);
	}
	public function update($id, Request $Request)
	{
		$data = Satuan::find($id);
		$data->update([
			'satuan'=>$Request->satuan,
			]);
		return redirect ('satuan.satuan-index');
	}
	public function destroy($id)
	{
		$data = Satuan::find($id);
		$data->delete();
		return redirect ('satuan.satuan-index');

	}
}