<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Satuan;
use App\Supplier;
use App\Categori;
class BarangController extends Controller
{
    public function index ()
    {
		$data= Barang::all();
		
		return view('barang.index-barang',[
			'data'	=>$data]);
    }

    public function create()
	{
		return view ('barang.add')->with('satuans', Satuan::all())
								  ->with('supliers', Supplier::all())
								  ->with('categoris', Categori::all());
    }
    
    public function store (Request $request)
	{
		$this->validate($request, [

			'nama_barang'     	=> 'required|max:255',
			'kode_barang'     	=> 'required|max:30',
            'qty'  				=> 'required',
            'satuan'	   		=> 'required',
			'id_suplier'		=> 'required',
			'categori'			=> 'required'
        ]);


		$barang = Barang::create([
				'nama_barang'	=> $request->nama_barang,
				'kode_barang'	=> $request->kode_barang,
				'qty'			=> $request->qty,
				'satuan'		=> $request->satuan,
				'id_suplier'	=> $request->id_suplier,
				'categori'		=> $request->categori
		]);
		$barang->save();
		return redirect()->back();
	}
}
