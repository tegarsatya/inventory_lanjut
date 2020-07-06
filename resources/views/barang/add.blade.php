@extends('layouts.menu')

@section('content')


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
        			<label for="validate-optional">Jenis Satuan</label>
					<div class="input-group">
						<input type="text" class="form-control" name="satuan" id="satuan" placeholder="Jenis Satuan"></input>
						<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
					</div>
				</div>
    			
                <input class="btn btn-primary" type="submit" value="Submit">
                <a href="{{ url('barang.satuan') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
            </form>
        </div>
    </div>
</div>
@endsection