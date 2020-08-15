@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Brand List(Table)</h2>
	<a href="{{ route('brands.create')}}" class="btn btn-success float-right">Add New</a>
	<table class="table" >
		<thead>
			
			<tr>
				<th>No</th>
				<th>Name</th>
				<th >Photo</th>
				<th>Actions</th>

			</tr>
		</thead>
		<tbody>
				@php $i=1; @endphp
				@foreach($brands as $brand)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$brand->name}}</td>
					<td><img src="{{asset($brand->photo)}}" class="img-fluid" width="100px"></td>
					<td><a href="{{ route ('brands.edit',$brand->id)}}"><button class="btn btn-warning">Edit</button></a>
						<form method="post" action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">	
							@csrf
							@method('DELETE')
							<a href="" ><button class="btn btn-warning">Delete</button></a></td>
						</form>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-6">
								<img src="{{-- {{asset($item->photo)}} --}}" class="img-fluid w-50 d-block">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>

		@endsection
		@section('script')
		<script type="">
			$(document).ready(function(){
				$('.modalbox').click(function(){
					var name=$(this).data('name');
					var photo=$(this).data('photo');
					
					$('.modal-title').text(name);
					$('.img-fluid').attr('src',photo);
					$("#mymodal").modal('show');

				})

			})
		</script>