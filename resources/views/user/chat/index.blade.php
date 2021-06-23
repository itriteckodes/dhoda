@extends('user.layout.index')

@section('title')
Chat 
@endsection
@section('styles')
<script src="{{asset('admin/global_assets/js/demo_pages/chat_layouts.js')}}"></script>
@endsection

@section('content')
@if(Auth::user()->chats->count() == 0)
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Chat With Admin </h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('user.chat.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter Your Message</label>
                                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>    
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}"  placeholder="Enter Course Price" class="form-control" required>
                           
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Send Message 
                            <i class="icon-plus22 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@else 
@foreach(Auth::user()->chats as $chat) 
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Chat With Admin</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <ul class="media-list media-chat mb-3">
            @foreach($chat->messages as $message)
            @if($message->admin_id)
            <li class="media">
                <div class="mr-3">
                    <a href="#">
                        <img src="{{asset($message->admin->image)}}" class="rounded-circle" width="40" height="40" alt="">
                    </a>
                </div>

                <div class="media-body">
                    <div class="media-chat-item bg-slate border-slate">{{$message->message}}</div>
                    <div class="font-size-sm text-muted mt-2">{{$message->created_at->format('M d,Y H:i A')}}</div>
                </div>
            </li>
            @else 
            <li class="media media-chat-item-reverse">
                <div class="media-body">
                    <div class="media-chat-item bg-info border-info">{{$message->message}}</div>
                    <div class="font-size-sm text-muted mt-2">{{$message->created_at->format('M d,Y H:i A')}}
                        @if($message->status == "Unread")
                        <span class="badge badge-primary">{{$message->status}}</span>
                        @else 
                        <span class="badge badge-primary">{{$message->status}}</span>
                        @endif
                    </div>
                </div>
                <div class="ml-3">
                    <a href="#">
                        <img src="{{asset($message->user->image)}}" class="rounded-circle" width="40" height="40" alt="">
                    </a>
                </div>
            </li>
            @endif
            @endforeach
        </ul>
        <form action="{{route('user.chatmessage.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <textarea name="message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}"  placeholder="Enter Course Price" class="form-control" required>
            <input type="hidden" name="chat_id" value="{{$chat->id}}"  placeholder="Enter Course Price" class="form-control" required>

            <div class="d-flex align-items-center">
                {{--  <div class="list-icons list-icons-extended">
                    <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send photo"><i class="icon-file-picture"></i></a>
                    <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send video"><i class="icon-file-video"></i></a>
                    <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send file"><i class="icon-file-plus"></i></a>
                </div>  --}}

                <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
            </div>
        </form>
    </div>
</div>
@endforeach
@endif
@endsection