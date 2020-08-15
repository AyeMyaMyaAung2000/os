@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
	<h2>Subcategory Edit(Form/Old Value)</h2>

		<form method="POST" action="{{ route('subcategories.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				{{-- <div class="form-group"> --}}
					{{-- <div class="col-lg-5" style="padding-left: 200px">CodeNo:</div>
					<div class="col-lg-7"><input type="" name="codeno" class=" form-control my-2"></div> --}}
				{{-- </div> --}}

				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2" value="{{$subcategory->name}}">
					@error('codeno')
					<p class="text-danger">Your name is required</p>
					@enderror
				</div>

				
				<div class="col-lg-5" style="padding-left: 200px">Category_id:</div>
			<div class="col-lg-7">
				<select name="category_id" class="form-control">
					<optgroup label="Choose Category" ></optgroup>
						@foreach($categories as $category)
						<option value="{{$category->id}}"
							@if($subcategory->category_id == $category->id)
						{{'selected'}}
						@endif

							>{{$category->name}}</option>
					
					@endforeach
					</optgroup>
				</select>
			</div>
		</div>
				


				<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Create</button>
			</form>
	</div>
@endsection