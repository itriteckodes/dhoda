@extends('user.layout.index')

@section('title')
    Quiz Result 
@endsection

@section('content')

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Quiz Title</th>
                <th>Quiz Course Title</th>
                <th>Total Questions</th>
                <th>Your Score</th>
                <th>Prcentage %</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (Auth::user()->results as $key => $result)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$result->quiz->title}}</td>
                <td>{{$result->quiz->course->title}}</td>
                <td>{{$result->quiz->questions->count()}}</td>
                <td>{{$result->result}}</td>
                <td>{{ round((( $result->result / $result->quiz->questions->count() ) * 100)),2  }} %</td>
                <td>
                    <a href="{{route('user.quiz.show',$result->quiz->id)}}">
                        <button type="button" class="btn btn-success btn-sm">Retake Quiz</button>
                    </a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
