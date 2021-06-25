@extends('user.layout.index')

@section('title')
    User Dashboard
@endsection
@section('content')
<div class="row">
    <div class="col-sm-4 col-xl-4">
        <a href="{{route('user.order.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{count(App\Models\Order::where('user_id',Auth::user()->id)->get())}}</h3>
                        <span class="text-uppercase font-size-xs">Total Orders</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4 col-xl-4">
        <a href="{{route('user.pending.order')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{count(App\Models\Order::where('user_id',Auth::user()->id)->where('status','pending')->get())}}</h3>
                        <span class="text-uppercase font-size-xs">Total Pending Orders</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4 col-xl-4">
        <a href="{{route('user.completed.order')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{count(App\Models\Order::where('user_id',Auth::user()->id)->where('status','completed')->get())}}</h3>
                        <span class="text-uppercase font-size-xs">Total Completed Orders</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    {{-- <div class="col-sm-6 col-xl-6">
        <a href="{{route('user.quiz.results')}}">
            <div class="card card-body bg-teal-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">34323</h3>
                        <span class="text-uppercase font-size-xs">Total Taken Quiz</span>
                    </div>
                </div>
            </div>
        </a>
    </div> --}}
</div>
 
@endsection