@extends('user.layout.index')

@section('title')
    Manage Quizzes 
@endsection

@section('content')

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>Quiz Title</th>
                <th>Quiz Course Title</th>
                <th>Total Questions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($purchases as  $purchase)
            @foreach ($purchase->course->quizzes as $key => $quiz)
            <tr>
                <td>{{$quiz->title}}</td>
                <td>{{$quiz->course->title}}</td>
                <td>{{$quiz->questions->count()}}</td>
                <td>
                    <a href="{{route('user.quiz.show',$quiz->id)}}">
                        <button type="button" class="btn btn-success btn-sm">Take Quiz</button>
                    </a> 
                </td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>

@endsection
