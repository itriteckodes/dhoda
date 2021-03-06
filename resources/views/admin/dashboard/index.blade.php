@extends('admin.layout.index')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<div class="row">
    
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.user.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\User::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Users</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.order.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\Order::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Orders</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.blog.index')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\Blog::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Blogs</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.message.index')}}">
            <div class="card card-body bg-info-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\Message::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Messages</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.review.index')}}?type=today">
            <div class="card card-body bg-primary-700 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        {{-- $posts = Post::whereDate('created_at', Carbon::today())->get(); --}}
                        @php
                            $today = Carbon\Carbon::now()->format('Y-m-d').'%';
                            $data=count(App\Models\Review::where('created_at', 'like', $today)->get());
                        @endphp
                        {{-- {{dd(App\Models\Message::whereRaw('date(created_at) = ?', [\Carbon\Carbon::now()->format('Y-m-d')])->get())}} --}}
                        <h3 class="mb-0">{{$data}}</h3>
                        <span class="text-uppercase font-size-xs">Today  Reviews</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.review.index')}}">
            <div class="card card-body bg-primary-800 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        {{-- $posts = Post::whereDate('created_at', Carbon::today())->get(); --}}
                        
                        {{-- {{dd(App\Models\Message::whereRaw('date(created_at) = ?', [\Carbon\Carbon::now()->format('Y-m-d')])->get())}} --}}
                        <h3 class="mb-0">{{App\Models\Review::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total  Reviews</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
 
@endsection