@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Subcategory List(Table)</h2>
	<a href="{{ route('subcategories.create')}}" class="btn btn-success float-right">Add New</a>
	<table class="table" >
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th >Category_id</th>
				<th>Actions</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				@php $i=1; @endphp
				@foreach($subcategories as $subcategory)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$subcategory->name}}</td>
					<td>{{$subcategory->category->name}}</td>
					<td><a href="{{ route ('subcategories.edit',$subcategory->id)}}"><button class="btn btn-warning">Edit</button></a>
						<form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">	
							@csrf
							@method('DELETE')
							<a href="" ><button class="btn btn-warning">Delete</button></a></td>
						</form>

					</tr>
					@endforeach

			</tr>
		</tbody>
	</table>
</div>

@endsection