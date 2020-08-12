@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="text-justify py-2">

		<h2>Item Create(Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="POST" action="{{ route('items.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				{{-- <div class="form-group"> --}}
					<div class="col-lg-5" style="padding-left: 200px">CodeNo:</div>
					<div class="col-lg-7"><input type="" name="codeno" class=" form-control my-2"></div>
				{{-- </div> --}}

				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2"></div>

				<div class="col-lg-5" style="padding-left: 200px">Price:</div>
				<div class="col-lg-7"><input type="number" name="price" class="my-2 form-control"></div>
				<div class="col-lg-5" style="padding-left: 200px">Discount:</div>
				<div class="col-lg-7"><input type="number" name="discount" class="form-control my-2"></div>
				<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
				<div class="col-lg-7"><input type="file" name="photo" class="form-control-file my-2"></div>
				<div class="col-lg-5 my-2" style="padding-left: 200px">Description:</div>
				<div class="col-lg-7"><input type="text" name="description" class="form-control my-2"></div>

				<div class="col-lg-5 my-2" style="padding-left: 200px">Brand_id:</div>
				<div class="col-lg-7">
					<select name="brand_id" class="form-control">
						<optgroup label="Choose Subcategory" ></optgroup>
						@foreach($brands as $brand)
						<option value="{{$brand->id}}">{{$brand->name}}</option>
					
					@endforeach
					</optgroup>
				</select>
			</div>

			<div class="col-lg-5" style="padding-left: 200px">Subcategory_id:</div>
			<div class="col-lg-7">
				<select name="subcategory_id" class="form-control">
					<optgroup label="Choose Subcategory" ></optgroup>
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
					
					@endforeach
					</optgroup>
				</select>
			</div>


				<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Create</button>
			</form>
		</div>
	</div>

</div>
@endsection