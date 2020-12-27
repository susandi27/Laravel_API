@extends('backend_master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Orders</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Orders</a></li>
      </ul>
    </div>

     <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i> Shoplues</h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Date: {{$order->orderdate}}</h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">
                  <p>Name: <strong>{{ $order->user->name }}</strong><br>
                  Email: {{ $order->user->email }} <br>
                  <font style="text-indent: 50px;">Invoice: {{ $order->orderno }}</font></p>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Qty</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($order->items as $item)
                      @php 
                      $qty = $item->pivot->qty;
                      $subtotal = $item->price*$qty; 
                      @endphp
                      <tr>
                        <td>{{$qty}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{number_format($item->price)}}</td>
                        <td>{{number_format($subtotal)}}</td>
                      </tr>
                      @endforeach
                  </table>
                </div>
              </div>
              <div class="col-12 text-right">
                 <form method="post" action="{{route('orders.update',$order->id)}}" class="d-inline-block" enctype="multipart/form-data">
                    <button class="btn btn-primary" type="submit">Confirm</button>
                    @csrf
                    @method('PUT')
                  </form>
                
              </div>
            </section>
          </div>
        </div>
      </div>  
  </main>
@endsection