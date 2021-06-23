@extends('user.layout.index')

@section('title')
    View Courses
@endsection

@section('content')
<div class="row">
	@foreach ($purchases as $key => $purchase)
	<div class="col-xl-3 col-sm-6">
		<div class="card bg-teal-400" style="background-image: url({{asset('global_assets/images/backgrounds/panel_bg.png')}}); background-size: contain;">
			<div class="card-body text-center">
				<div class="card-img-actions d-inline-block mb-3">
					<img class="img-fluid rounded-circle" src="{{asset($purchase->course->image)}}" width="170" height="170" alt="">
					<div class="card-img-actions-overlay card-img rounded-circle">
						<a href="{{route('user.course.detail',str_replace(' ', '_',$purchase->course->title))}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
							<i class="icon-link"></i>
						</a>
					</div>
				</div>
				<h6 class="font-weight-semibold mb-0">{{$purchase->course->title}}</h6>
				<span class="d-block opacity-75">{{$purchase->course->category->name}}</span>
				<button class="btn btn-success"> {{$purchase->course->price}} </button>
				<a href="{{route('user.course.detail',str_replace(' ', '_',$purchase->course->title))}}">
					<button class="btn btn-success"> View Detail </button>
				</a>
			</div>
		</div>
	</div>
    @endforeach
</div>
@endsection