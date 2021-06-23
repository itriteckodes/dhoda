@extends('user.layout.index')

@section('title')
    View Courses
@endsection

@section('content')
<div class="row">
	@foreach (App\Models\Course::all() as $key => $course)

	<div class="col-xl-3 col-sm-6">
		<div class="card bg-teal-400" style="background-image: url({{asset('global_assets/images/backgrounds/panel_bg.png')}}); background-size: contain;">
			<div class="card-body text-center">
				<div class="card-img-actions d-inline-block mb-3">
					<img class="img-fluid rounded-circle" src="{{asset($course->image)}}" width="170" height="170" alt="">
					<div class="card-img-actions-overlay card-img rounded-circle">
						<a href="{{route('user.course.show',$course->id)}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
							<i class="icon-link"></i>
						</a>
					</div>
				</div>
				<h6 class="font-weight-semibold mb-0">{{$course->title}}</h6>
				<span class="d-block opacity-75">{{$course->category->name}}</span>
				@if(Auth::user()->purchases->where('course_id',$course->id)->first())
				<button class="btn btn-primary"> Already Purchased </button>
				@else
				<button class="btn btn-success"> {{$course->price}} </button>
				<a href="{{route('user.course.show',$course->id)}}">
					<button class="btn btn-success"> View Detail </button>
				</a>
				@endif
			</div>
		</div>
	</div>
    @endforeach
</div>
@endsection