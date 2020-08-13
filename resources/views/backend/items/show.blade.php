@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
	<h2>Item Detail(Your UI)</h2>
	<div class="row">
		<div class="col-lg-6">
			<p><img src="{{ asset($item->photo)}}" class="img-fluid w-75">
		</div>
		<div class="col-lg-6">
			<div class="row">
				<div class="col-lg-6">
					Product Name:
				</div>
				<div class="col-lg-6">
					{{$item->name}}
				</div><hr>
				<div class="col-lg-6">
					Product Code;
				</div>
				<div class="col-lg-6">
					{{$item->codeno}}
				</div><hr>
				<div class="col-lg-6">
					Product Price:
				</div>
				<div class="col-lg-6">
					{{$item->price}}
				</div><hr>
				<div class="col-lg-6">
					Description
				</div>
				<div class="col-lg-6">
					{{$item->description}}
				</div><hr>
			</div>
		</div>
		
	</div>
	</div>
@endsection