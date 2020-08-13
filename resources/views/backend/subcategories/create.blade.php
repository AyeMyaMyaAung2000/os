@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="text-justify py-2">

		<h2>Subcategory Create(Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="POST" action="{{ route('subcategories.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				{{-- <div class="form-group"> --}}
					{{-- <div class="col-lg-5" style="padding-left: 200px">CodeNo:</div>
					<div class="col-lg-7"><input type="" name="codeno" class=" form-control my-2"></div> --}}
				{{-- </div> --}}

				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2"></div>

				
				<div class="col-lg-5" style="padding-left: 200px">Category_id:</div>
			<div class="col-lg-7">
				<select name="category_id" class="form-control">
					<optgroup label="Choose Category" ></optgroup>
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
					
					@endforeach
					</optgroup>
				</select>
			</div>
		</div>
				


				<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Create</button>
			</form>
		</div>
		</div>
	


@endsection