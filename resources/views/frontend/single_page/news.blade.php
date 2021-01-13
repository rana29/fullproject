@extends('frontend.layouts.master')


@section('content')

	<!-- Banner Section -->
	<section class="banner_part">
		<img src="{{asset('/')}}frontend/image/banner.jpg" style="width: 100%">
	</section>

	<!-- About us Section -->
	
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
@endsection