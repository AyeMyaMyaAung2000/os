@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Category List(Table)</h2>
	<a href="{{ route('categories.create')}}" class="btn btn-success float-right">Add New</a>
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
			<tr>
				<td>1
					<a href="{{ route ('categories.show',1)}}">
						<span class="badge badge-primary badge-pill" >Detail</span></a></td>
						<td>Hat</td>
						<td>234567</td>
						<td><a href="{{ route ('categories.edit',1)}}"><button class="btn btn-warning">Edit</button></a>
							<a href="" ><button class="btn btn-warning">Delete</button></a></td>

			</tr>
		</tbody>
	</table>
</div>

@endsection