@extends('user.layout.index')


@section('title')
    {{$section->title}} Course Section
@endsection
@section('styles')
<script src="{{asset('admin/global_assets/js/demo_pages/gallery.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/media/fancybox.min.js')}}"></script>   
<style>
    .ytplayer {
    pointer-events: none;
    position: absolute;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Section Description</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <p>{!! $section->detail !!} </p>
            </div>
        </div>
        <!-- /basic layout -->
    </div>
</div>

<!-- Image grid -->
<div class="mb-3">
    <h6 class="mb-0 font-weight-semibold">
        Course Section Files
    </h6>
</div>

<div class="row">
    @foreach($section->files as $file)
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start flex-nowrap">
                    <div>
                        <div class="font-weight-semibold mr-2">{{$file->name}}</div>
                        {{--  <span class="font-size-sm text-muted">Size: 432kb</span>  --}}
                    </div>

                    <div class="list-icons list-icons-extended ml-auto">
                        <a href="{{route('user.course.file',$file->id)}}" class="list-icons-item"><i class="icon-download top-0"></i></a>
                        {{--  <a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div
<!-- /image grid -->


<!-- Video grid -->
<div class="mb-3 pt-2">
    <h6 class="mb-0 font-weight-semibold">
        Lecture Videos
    </h6>
</div>
<div class="row">
    @foreach($section->videos as $video)
    <div class="col-sm-6">

        <!-- Embed element -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{$video->name}}</h5>
            </div>

            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <embed class="embed-responsive-item" src="{{$video->url}}">
                    {{--  <iframe width="560" height="315" src="{{$video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  --}}
                </div>
            </div>
        </div>
        <!-- /embed element -->

    </div>
    @endforeach

</div>
@endsection