@extends('user.layout.index')

@section('title')
    {{$quiz->title}} Quiz 
@endsection

@section('content')

<form  action="{{route('user.quiz.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-12">
            @foreach($questions as $key => $question)
            <!-- Basic layout-->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Question No.{{$key+1}} : {{$question->statement}} ?</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>
    
                <div class="card-body">
                    @foreach($question->options as $key => $option)
                    <div class="col-md-12">
                        <div class="radio">
                            <input type="radio" name="answer[{{$question->id}}]" id="{{$option->id}}" value="{{$option->id}}">
                            <label for="{{$option->id}}">{{$option->option}}</label>
                        </div>  
                    </div>
                    @endforeach
                    <input type="hidden" name="questions[]" value="{{$question->id}}">
                </div>
            </div>
            <!-- /basic layout -->
            @endforeach
            <input type="hidden" name="quiz" value="{{$quiz->id}}">
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit Quiz 
                    <i class="icon-plus22 ml-2"></i>
                </button>
            </div>
        </div>
    </div>
</form>

@endsection
