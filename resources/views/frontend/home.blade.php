@extends('frontendtemplate')
{{-- @section('sidebar')
	@include ('frontend.sidebar')
@endsection
--}}
@section('content') 

<div class="col-lg-9 my-5">

	{{-- <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> --}}
	<h2 style="text-align: center;font-size: 35px;margin-bottom: 15px;">Hello Bike Lovers</h2>
	<div class="row my-2">

		@foreach($items as $item)
		<div class="col-lg-4 col-md-6 mb-4">
			
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
				<div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$item->name}}</a>
                </h4>
                <h5>${{$item->price}}</h5>
                <p class="card-text">{{$item->description}}</p>
              </div>
				<div class="card-footer">
					<a href="" class="addtocart btn btn-info" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{asset('$item->photo')}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">Add to Cart</a>
					
					<a href="{{route('detailpage',$item->id)}}" class="btn btn-primary">Detail</a>
				</div>
			</div>
		</div>
	@endforeach
	<!-- /.row -->
</div>


</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
	

</script>
@endsection