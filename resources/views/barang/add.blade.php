@extends('layouts.menu')

@section('content')

<div class="container">
	<div class="row">
		<h2>Create Barang Masuk</h2>
	</div>
    <div class="panel-body">
    			@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Oops!</strong> Terjadi Kesalahan input !.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
        <div class="col-sm-offset-4 col-sm-4">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('barang.save') }}">
       			 <input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label for="validate-optional">Nama Barang</label>
						<div class="input-group">
							<input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama_barang"></input>
							<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="validate-optional">Kode Barang</label>
						<div class="input-group">
							<input type="text" class="form-control" name="kode_barang" id="Kode_barang" placeholder="Kode Barang"></input>
							<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="category">Pilih Satuan</label>
						<select name="satuan" id="satuan" class="form-control">
							@foreach($satuans as $satuan)
							 <option value="{{ $satuan->satuan}}">{{ $satuan->satuan }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="validate-optional">qty</label>
						<div class="input-group">
							<input type="text" class="form-control" name="qty" id="qty" placeholder="qty"></input>
							<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
						</div>
					</div>

					<div class="form-group">
						<label for="category">Pilih Supllier</label>
						<select name="id_suplier" id="id_suplier" class="form-control">
							@foreach($supliers as $sup)
							 <option value="{{ $sup->nama}}">{{ $sup->nama }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="category">Pilih Category</label>
						<select name="categori" id="categori" class="form-control">
							@foreach($categoris as $cat)
							 <option value="{{ $cat->categori}}">{{ $cat->categori }}</option>
							@endforeach
						</select>
					</div>
					
               		<input class="btn btn-primary" type="submit" value="Submit">
                	<a href="{{ url('barang.satuan') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
            </form>
        </div>
    </div>
</div>
@endsection