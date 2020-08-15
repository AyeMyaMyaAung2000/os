@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Order List(Table)</h2>
	{{-- <a href="{{ route('subcategories.create')}}" class="btn btn-success float-right">Add New</a> --}}
	<table class="table" >
		<thead>
			<tr>
				<th>No</th>
				<th>Order Date</th>
				<th >Voucherno</th>
				<th>Note</th>
				<th>Status</th>
				<th>Total</th>

			</tr>
		</thead>
		<tbody>
			
			@php $i=1; @endphp
			@foreach($orders as $order)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$order->orderdate}}</td>
				<td>{{$order->voucherno}}</td>
				<td >{{$order->note}}</td>
				<td >{{$order->status}}</td>
				<td >{{$order->total}}</td>
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
</div>


@endsection