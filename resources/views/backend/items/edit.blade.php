@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Item Edit(Form/Old Value)</h2>

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form method="POST" action="{{ route('items.update',$item->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="row">
			{{-- <div class="form-group"> --}}
				<div class="col-lg-5" style="padding-left: 200px">CodeNo:</div>
				<div class="col-lg-7"><input type="" name="codeno" class=" form-control my-2" value="{{$item->codeno}}"></div>
			{{-- </div> --}}

			<div class="col-lg-5" style="padding-left: 200px">Name:</div>
			<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2"  value="{{$item->name}}"></div>

			<div class="col-lg-5" style="padding-left: 200px">Price:</div>
			<div class="col-lg-7"><input type="number" name="price" class="my-2 form-control" value="{{$item->price}}"></div>
			<div class="col-lg-5" style="padding-left: 200px">Discount:</div>
			<div class="col-lg-7"><input type="text" name="discount" class="form-control my-2" value="{{$item->discount}}"></div>
			<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
			<div class="col-lg-7">
				<img src="{{asset($item->photo)}}">
				<input type="file" name="photo" class="form-control-file my-2" >
				<input type="hidden" name="oldphoto" value="{{$item->photo}}"></div>
			<div class="col-lg-5 my-2" style="padding-left: 200px">Description:</div>
			<div class="col-lg-7"><input type="text" name="description" class="form-control my-2" value="{{$item->description}}"></div>

			<div class="col-lg-5 my-2" style="padding-left: 200px">Brand_id:</div>
			<div class="col-lg-7">
				<select name="brand_id" class="form-control">
					<optgroup label="Choose Subcategory" ></optgroup>
					@foreach($brands as $brand)
					<option value="{{$brand->id}}"
						@if($brand->id==$item->brand_id)
						{{'selected'}}
						@endif
					>{{$brand->name}}
					</option>
					
					@endforeach
				</optgroup>
			</select>
		</div>

		<div class="col-lg-5" style="padding-left: 200px">Subcategory_id:</div>
		<div class="col-lg-7">
			<select name="subcategory_id" class="form-control">
				<optgroup label="Choose Subcategory" ></optgroup>
				@foreach($subcategories as $subcategory)
				<option value="{{$subcategory->id}}"
					@if($subcategory->id == $item->subcategory_id)
						{{'selected'}}
						@endif

					>{{$subcategory->name}}</option>
				
				@endforeach
			</optgroup>
		</select>
	</div>


	<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Update</button>
</form>
</div>

@endsection