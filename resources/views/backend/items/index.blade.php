@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Item List(Table)</h2>
	<a href="{{ route('items.create')}}" class="btn btn-success float-right">Add New</a>
	<table class="table" >
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th >Codeno</th>
				<th>Price</th>
				<th>Actions</th>

			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($items as $item)

			<tr>
				<td>{{$i++}}</td>
				<td>{{ $item->codeno}}
					<a href="{{ route ('items.show',$item->id)}}">
						<span class="badge badge-primary badge-pill" >Detail</span>
					</a>
					<a href="#" class="modalbox" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price=" {{$item->price}}" data-desc="{{$item->description}}" >
						<span class="badge badge-primary badge-pill" >Modal</span>
					</a>
				</td>
				<td>{{$item->name}}</td>
				<td>{{$item->price}}</td>
				<td><a href="{{ route ('items.edit',$item->id)}}"><button class="btn btn-warning">Edit</button></a>

					<form method="post" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">	
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
					</form>
				</td>

			</tr>

			@endforeach
		</tbody>
	</table>
</div>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-6">
						<img src="{{-- {{asset($item->photo)}} --}}" class="img-fluid w-50 d-block">
					</div>
					<div class="col-lg-6">
						Price:<strong id="price">{{-- {{$item->price}} --}}</strong><br>
						
						Description:<strong id="desc">{{-- {{$item->description}} --}}</strong><br>
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
			var price=$(this).data('price');
			var desc=$(this).data('desc');

			$('.modal-title').text(name);
			$('.img-fluid').attr('src',photo);
			$("#price").text(price);
			$("#desc").text(desc);
			$("#modal").modal('show');

		})

	})
</script>
@endsection