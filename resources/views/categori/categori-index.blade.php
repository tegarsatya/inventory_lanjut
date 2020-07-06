@extends('layouts.menu')

@section('content')
<div class="content-wrapper">
<section class="content-header">
	<h1>Master Categori
		</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header with-border">					
					<a href="{{ url('categori.add') }}"><button type="button" class="btn btn-primary">Create New Data</button></a>
					
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
					<thead>
						<tr>
							<th>Kode Categori</th>
							<th>Categori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
							@if ($data->count() > 0)
								@foreach ($data as $value)
									<tr>
										<td>{{ $value['id'] }}</td>
										<td>{{ $value['categori'] }}</td>
										
										<td><a href="{{ url('categori.edit/'.$value['id']) }}"><button class="btn btn-primary">Edit</button></a> <a><button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button></a>
										<div class="modal fade" id="myModal" role="dialog">
    									<div class="modal-dialog modal-sm">
      									<div class="modal-content">
        								<div class="modal-header">
          										<button type="button" class="close" data-dismiss="modal">&times;</button>
          												<h4 class="modal-title">Delete record</h4>
        								</div>
        								<div class="modal-body">
          									<p>Are you sure want to delete record ? </p>
        								</div>
        								<div class="modal-footer">
          									<a href="{{ url('categori.delete/'.$value['id']) }}"><button  type="button" class="btn btn-danger" >Yes</button></a>
          									<button type="button" class="btn btn-info" data-dismiss="modal">No</button>
        								</div>
      									</div>
    									</div>
  										</div>
 										</div></td>
									</tr>
								@endforeach
							@else
								<tr>
									<td class="text-center" colspan="6">Tidak ada data yang tersedia.</td>
								</tr>
							@endif
							</tbody>

					</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>

</div>

</div>

@endsection