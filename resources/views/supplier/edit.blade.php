@extends('layouts.menu')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Edit </h4></div>

				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Oops!</strong> Terjadi Kesalahan Input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form class="form-horizontal" role="form" method="post" action="{{ url('supplier.update/'.$value->id) }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-3 control-label">Kode Supplier</label>
							<div class="col-md-6">
								<input type="text" name="id" class="form-control" value="{{ $value->id }}" readonly>
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Supplier</label>
							<div class="col-md-6">
								<input type="text" name="nama" class="form-control" value="{{ $value->nama }}">
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Alamat</label>
							<div class="col-md-6">
								<input type="text" name="alamat" class="form-control" value="{{ $value->alamat }}">
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-6">
								<input type="text" name="email" class="form-control" value="{{ $value->email }}">
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Telp</label>
							<div class="col-md-6">
								<input type="text" name="telp" class="form-control" value="{{ $value->telp }}">
								
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button class="btn btn-primary" type="submit">Simpan</button>
								<a class="btn btn-danger" href="{{ url('supplier.supplier-index') }}">Kembali</a>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
