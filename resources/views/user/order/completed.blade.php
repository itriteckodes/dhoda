@extends('user.layout.index')

@section('title')
    Completed Orders
@endsection
@section('content')
<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>SR#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Order::where('user_id',Auth::user()->id)->where('status','completed')->get() as $key => $order)
            <tr role="row">
                <td>{{ $key+1 }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->qty }}</td>
                <td>{{ $order->amount }}</td>
                <td><a href="{{ route('user.order.show',$order->id) }}" class="btn btn-primary">Show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
