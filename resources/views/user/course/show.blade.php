@extends('user.layout.index')

@section('title')
    {{$course->title}} Course
@endsection

@section('content')
<!-- Inner container -->
<div class="d-flex align-items-start flex-column flex-md-row">

    <!-- Left content -->
    <div class="w-100 overflow-auto order-2 order-md-1">

        <!-- Course overview -->
        <div class="card">
            <div class="card-header header-elements-md-inline">
                <h5 class="card-title">Course Description</h5>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" >
                    <div class="card-body">
                        <div class="mt-1 mb-4">
                            <p>{!! $course->detail !!}</p>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Lessons</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Total Videos</th>
                                    <th>Total Files</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($course->sections as $key=> $section)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$section->title}}</td>
                                    <td>{!! $section->detail !!}</td>
                                    <td><span class="badge bg-primary">{{$section->videos->count()}}</span></td>
                                    <td><span class="badge bg-secondary">{{$section->files->count()}}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- /course overview -->

    </div>
    <!-- /left content -->


    <!-- Right sidebar component -->
    <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Course details -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold">Course details</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body pb-0">
                    <a href="{{route('user.purchase.show',$course->id)}}" class="btn bg-teal-400 btn-block mb-2">Take Course</a>
                </div>

                <table class="table table-borderless table-xs border-top-0 my-2">
                    <tbody>
                        <tr>
                            <td class="font-weight-semibold">Duration:</td>
                            <td class="text-right">{{$course->duration}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-semibold">Language:</td>
                            <td class="text-right">
                                <span class="badge bg-primary">{{$course->language}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-semibold">Total Lectures:</td>
                            <td class="text-right">
                                <span class="badge bg-success">{{$course->sections->count()}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-semibold">Price:</td>
                            <td class="text-right">
                                <span class="badge bg-danger">{{$course->price}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-semibold">Purchases:</td>
                            <td class="text-right">{{$course->purchases->count()}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /course details -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /right sidebar component -->

</div>
<!-- /inner container -->
@endsection