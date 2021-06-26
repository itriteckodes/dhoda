@extends('admin.layout.index')

@section('title')
    Completed Orders
@endsection
@section('content')
<div class="card">

    <table class="table datatable-save-state =">
        <thead>
            <tr>
                <th>SR#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Order::completed() as $key => $order)
            <tr role="row">
                <td>{{ $key+1 }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->qty }}</td>
                <td>{{ $order->amount }}</td>
                <td><a href="{{ route('admin.order.show',$order->id) }}" class="btn btn-primary">Show</a></td>
                <td>
                    <button type="button" class="btn btn-sm btn btn-danger deleteBtn" data-toggle="modal" data-target="#delete_modal" id="{{$order->id}}" title="Click to Delete">
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
            $('#deleteForm').attr('action','{{route('admin.order.destroy','')}}' +'/'+id);
        });

    });
</script>
@endsection
