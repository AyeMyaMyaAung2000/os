@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="text-justify py-2">

		<h2>Category Create(Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="POST" action="{{ route('categories.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				{{-- <div class="form-group"> --}}
					{{-- <div class="col-lg-5" style="padding-left: 200px">CodeNo:</div>
					<div class="col-lg-7"><input type="" name="codeno" class=" form-control my-2"></div> --}}
				{{-- </div> --}}

				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2"></div>

				
				<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
				<div class="col-lg-7"><input type="file" name="photo" class="form-control-file my-2"></div>
				


				<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Create</button>
			</form>
		</div>
		</div>
	</div>


@endsection