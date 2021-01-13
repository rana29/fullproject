
	
	@extends('frontend.layouts.master')


	@section('content')

	@include('frontend.layouts.slider')
	
	<!-- Mission and Vision -->
	<section class="mission_vision">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">Mission and Vision</h3>
				</div>
			</div>
			<div class="row">
				@foreach($mission as $mission)
				<div class="col-md-6">
					<img src="{{asset('mission/'.$mission->image)}}" style="border: 1px solid #ddd; width:200px; padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
					<p style="text-align: justify;"><strong>Mission</strong>{{$mission->title}} </p>
				</div>
				<div class="col-md-6">
					<img src="{{asset('vision/'.$vision->image)}}" style="border: 1px solid #ddd;padding: 5px; width:200px; background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
					<p style="text-align: justify;"><strong>Vision</strong> {{$vision->title}}</p>
				</div>
			</div>

			@endforeach
		</div>
	</section>
	<!-- News and Events -->
	<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px;">
					<h3 style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
				</div>
				<div class="col-md-9" style="padding-top: 15px;">
					<table class="table table-striped table-bordered table-hover table-md table-warning">
						<thead class="thead-dark">

							<tr>
								<th>SL</th>
								<th>Date</th>
								<th>image</th>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							 @foreach($news as $key =>$data)
							<tr>
								<td>{{$key}}</td>
								<td>{{date('d-m-y',strtotime($data->Date))}}</td>
								<td><img src="{{asset('news/'.$data->image)}}" style=" width:200px;"></td>
								<td>Dummy conte</td>
								<td><a href="{{route('detil',$data->id)}}" class="btn btn-info">Details</a></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Services -->
	<section class="our_services">
		<div class="container" style="padding-top: 15px">
			<!-- Nav tab -->

				@php
				$count=0;
				@endphp
			<ul class="nav nav-tabs">
				@foreach($service as $data)
				<li class="nav-item">
					<a href="#{{$data->id}}" class="nav-link @if($count==0) { active } @endif" data-toggle="tab"> {{$data->title}}</a>
				</li>
				@php
				$count++;
				@endphp
				@endforeach
			</ul>
			<!-- Tab Content -->
			<div class="tab-content">
				    @php
				    $count=0;
				    @endphp
			
				    @foreach($service as $data)

				<div id="{{$data->id}}" class="container tab-pane @if($count==0) { active } @endif">
					
					<h3>{{$data->title}}</h3>
					<p>{{$data->subtitle}}</p>
				
				</div>

				@php
				$count++;
				@endphp
				@endforeach
			
			</div>
		</div>

	</section>

	@endsection

	
