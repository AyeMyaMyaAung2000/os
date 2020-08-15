@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
	<h2>Category Edit(Form/Old Value)</h2>
	<form method="POST" action="{{ route('categories.update',$category->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				{{-- <div class="form-group"> --}}
					{{-- <div class="col-lg-5" style="padding-left: 200px">CodeNo:</div>
					<div class="col-lg-7"><input type="" name="codeno" class=" form-control my-2"></div> --}}
				{{-- </div> --}}

				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2"  value="{{$category->name}}">
					@error('name')
					<p class="text-danger">Your name is required</p>
					@enderror
						
				</div>

				
				<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
				<div class="col-lg-7"><img src="{{asset($category->photo)}}" width="50px;">
				<input type="file" name="photo" class="form-control-file my-2" >
				<input type="hidden" name="oldphoto" value="{{$category->photo}}"></div>
				
				<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Update</button>
			</form>
	</div>
@endsection