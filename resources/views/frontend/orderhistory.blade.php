@extends('frontend_master')
@section('content')


    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1 class="text-center">My Orders</h1>

          </div>
        </div>
      </div>
    </div>


  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered" >
          <thead>
            <tr>
              <th>No</th>
              <th>Date</th>
              <th>Total Amount</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @php $j=1; @endphp
            @foreach($orders as $order)
            <tr>
              <td>{{ $j++ }}</td>
              <td>{{$order->orderdate}}</td>
              <td>{{$order->total}}</td>
              <td>{{$order->status}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
 @endsection
