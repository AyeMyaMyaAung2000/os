@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2 class="mt-4" style="text-align: center;font-size: 35px;">Profile</h2>

	<div class="row">
		<div class="col-lg-6" style="">
			<img src="frontend/images/register.jpg" class="img-fluid ml-5" >
		</div>
		<div class="col-lg-6 my-4" style="font-size:25px;">
			Name:<strong >{{Auth::user()->name}}</strong><br>
			Email:<strong>{{Auth::user()->email}}</strong><br>
			</div>
		<h2 class="my-5">You can change your data!</h2>
		
		<div class="col-lg-12">
			<div class="form-group">
				Profile:<input type="file" name="name" value="" placeholder="If you change your name,you can change here!" class="form-control-file" >
			</div>
			<div class="form-group">
				Name:<input type="text" name="name" value="{{Auth::user()->name}}" placeholder="If you change your name,you can change here!" class="form-control" style="border-radius: 20px;height: 50px;">
			</div>
			<div class="form-group">
				Email:<input type="text" name="name" value="{{Auth::user()->email}}" placeholder="If you change your email,you can change here!" class="form-control" style="border-radius: 20px;height: 50px;">
			</div>
			<div class="form-group">
				{{-- Address<input type="text" name="name" value="" placeholder="If you change your email,you can change here!" class="form-control" style="border-radius: 20px;height:50px;"> --}}
				<a href="" class="btn btn-info my-3 float-right" style="border-radius: 30px;width: 150px;height: 50px;font-size: 20px;padding-top: 10px;">Change</a>
			</div>
		</div>

		
	</div>
</div>

@endsection