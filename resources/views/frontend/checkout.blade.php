@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<div id="checkout_body">
		<div class="container my-3 text-center banner">
			<div class="row py-5">
				<div class="offset-md-2 col-md-8">
					<h3 class="py-3">Check Out</h3>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>No.</th>
									<th>Item Name</th>
									<th>Photo</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Sub Total</th>
								</tr>
							</thead>
							<tbody>
								{{-- @php $i=1 @endphp
								@foreach($items as $item)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$item->name}}</td>
									<td>{{$item->price}}</td> --}}
								{{-- <td><button class="btn btn-light btn-sm max">+</button>3
								<button class="btn btn-light btn-sm min">-</button></td>
								<td>{{$item->price}}</td> --}}
							{{-- </tr> --}}
						</tbody>
					</table>
					{{-- @endforeach --}}
				</div>
			</div>

			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<textarea class="form-control notes" placeholder="Your Note Here!"></textarea>
					<input type="hidden" name="" class="total">		
				</div>
			</div>
			<div class="offset-md-2 col-md-4 mt-3">
				<a href="{{route('homepage')}}" class="btn btn-secondary">Continue Shopping</a>
			</div>

			<div class="offset-md-2 col-md-4 mt-3">
				@auth 
				<a href="#" class="btn btn-secondary buy_now">Checkout</a>
				@else
				<a href="{{route('login')}}" class="btn btn-secondary ">Login To Buy</a>
				@endauth
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