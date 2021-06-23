@extends('user.layout.index')

@section('title')
    Order Detail
@endsection

@section('content')
<div class="card">
    <h3 class="p-3">Order Detail</h3>
    <table class="table datatable-save-state table-responsive">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact No.</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Country</th>
                <th>City</th>
                <th>District</th>
                <th>Postal Code</th>
            </tr>
        </thead>
        <tbody>
            <tr role="row">
                 <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->address}}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->qty }}</td>
                <td>{{ $order->amount }}</td>
                <td>{{ $order->country }}</td>
                <td>{{ $order->city }}</td>
                <td>{{ $order->district }}</td>
                <td>{{ $order->postal_code }}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="card">
    <h3 class="p-3">Ordered Items</h3>
    <table class="table datatable-save-state">
        <thead>
            <tr >
                <th>#</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>SubTotal</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $key => $item)
            <tr >
                <td>{{$key + 1}}</td>
                <td>{{$item->product->name}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->product->price}}</td>
                <td>{{$item->product->price * $item->qty}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
