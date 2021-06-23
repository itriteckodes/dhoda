@extends('user.layout.index')

@section('title')
    Orders List
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
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $key => $order)
            <tr >
                <td>{{ $key+1 }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->qty }}</td>
                <td>{{ $order->amount }}</td>
                @if ($order->status=='pending')
                <td>
                    <p><span class="badge badge-warning">Pending</span></p>
                </td>
                @endif
                @if ($order->status=='completed')
                <td>
                    <p><span class="badge badge-success">Complete</span> </p>
                </td>
                @endif
                <td><a href="{{ route('user.order.show',$order->id) }}" class="btn btn-primary">Show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
