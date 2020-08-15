@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
	<h2>Brand Edit(Form/Old Value)</h2>
	{{-- @if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif --}}
		<form method="POST" action="{{ route('brands.update',$brand->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				{{-- <div class="form-group"> --}}
					{{-- <div class="col-lg-5" style="padding-left: 200px">CodeNo:</div>
					<div class="col-lg-7"><input type="" name="codeno" class=" form-control my-2"></div> --}}
				{{-- </div> --}}

				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2"  value="{{$brand->name}}">
					@error('name')
					<p class="text-danger">Your name is required</p>
					@enderror
						
				</div>

				
				<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
				<div class="col-lg-7"><img src="{{asset($brand->photo)}}" width="50px;">
				<input type="file" name="photo" class="form-control-file my-2" >
				<input type="hidden" name="oldphoto" value="{{$brand->photo}}"></div>
				
				<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Update</button>
			</form>
	</div>
@endsection