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
                                    <th>Action</th>
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
                                    <td><a href="{{route('user.course.section',str_replace(' ', '_',$section->title))}}"><span class="badge bg-success">View</span></a></td>
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
                    <span class="text-uppercase font-size-sm font-weight-semibold">Course Quiz</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>


                <table class="table table-borderless table-xs border-top-0 my-2">
                    <tbody>
                        @foreach($course->quizzes as $quiz)
                        <tr>
                            <td class="font-weight-semibold">Quiz Title:</td>
                            <td class="text-right">{{$quiz->title}}</td>
                        </tr>
                        @endforeach
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