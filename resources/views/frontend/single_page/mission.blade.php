@extends('frontend.layouts.master')


@section('content')

	<!-- Banner Section -->
	<section class="banner_part">
		<img src="{{asset('/')}}frontend/image/banner.jpg" style="width: 100%">
	</section>

	<!-- About us Section -->
	<section class="about_us">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<img src="{{asset('mission/'.$mission->image)}}" style="border: 1px solid #ddd; width:200px; padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
					<p style="text-align: justify;"><strong>Mission</strong>{{$mission->title}} </p>
				</div>
				
			</div>
		</div>
	</section>
@endsection