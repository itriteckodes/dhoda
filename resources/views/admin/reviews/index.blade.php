@extends('admin.layout.index')

@section('title')
    Reviews List
@endsection

@section('content')
<div class="card">

    <table class="table datatable-save-state table-responsive">
        <thead>
            <tr>
                <th>SR#</th>
                <th>Review Date</th>
                <th>User Name</th>
                <th>Product Name</th>
                <th>User City</th>
                <th>User Email</th>
                <th>Rating</th>
                <th>Review</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $key => $review)
            <tr >
                <td>{{ $key+1 }}</td>
                <td>{{ $review->created_at->format('d-M-y') }}</td>
                <td>{{ $review->name }}</td>
                <td>{{ $review->product->name }}</td>
                <td>{{ $review->city }}</td>
                <td>{{ $review->email }}</td>
                <td>{{ $review->rating }}</td>
                <td>{{ $review->message }}</td>
                <td>
                    <button type="button" class="btn btn-sm btn btn-danger deleteBtn" data-toggle="modal" data-target="#delete_modal" id="{{$review->id}}" title="Click to Delete">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="deleteForm" method="POST">
                @csrf
                @method('Delete')
            
            <div class="modal-header">
                <h4 class="modal-title">
                    Warning
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function()
    {
        $('body').on('click', '.deleteBtn', function(){
            let id = $(this).attr('id');
            $('#id').val(id);
            $('#deleteForm').attr('action','{{route('admin.review.destroy','')}}' +'/'+id);
        });

    });
</script>
@endsection
