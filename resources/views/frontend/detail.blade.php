@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2 class="text-center my-5">Item Detail</h2>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($items->photo)}}" class="img-fluid w-55">
			</div>

			<div class="col-md-8" class="table-responsive">
				
						Name:{{$items->name}}<br>
						CodeNo:{{$items->codeno}}<br>
						Price:{{$items->price}}<br>
						Description:{{$items->description}}<br>
						<a href="#" class="addtocart btn btn-primary"  data-id="{{$items->id}}" data-name="{{$items->name}}" data-photo="{{asset('$items->photo')}}" data-price="{{$items->price}}" data-discount="{{$items->discount}}">Add to Cart<span id="item_count"></span></a>
						
						
			</div>

		</div>
	</div>
		
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
	

</script>
@endsection