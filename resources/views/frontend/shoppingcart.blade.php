@extends('frontend_master')
@section('content')

<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{ route('homepage') }}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table shoppingtable">
					<thead>
						<tr>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table"></tbody>
					<tfoot id="shoppingcart_tfoot">
						
						<tr> 
							<td colspan="5"> 
								<textarea class="form-control" id="notes" placeholder="Any Request..."></textarea>
							</td>
							<td colspan="3">
								@guest
								<a href="javascript:void(0)" class="btn btn-secondary btn-block mainfullbtncolor checkoutBtn">Login to Check Out</a>
								@else
								<a href="javascript:void(0)" class="btn btn-secondary btn-block mainfullbtncolor checkoutBtn">Check Out</a>
								@endguest
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			

		</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h5 class="modal-title" id="exampleModalLabel">Successful Modal!</h5>
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		          </button>
		        </div>
		        <div class="modal-body">
		          <div class="col-4">
						<img src="{{ asset('frontend_assets/image/success-tick-dribbble.gif') }}" class="img-fluid">
					</div>
					<div class="col-8 pt-5">
						<h4> Your order is complete </h4>
						<p> You order will be delivered in 4 days. </p>
					</div>
		        </div>
		        <div class="modal-footer">
		          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
		          <a href="{{route('homepage')}}" class="btn btn-primary">OK</a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>		
	

@endsection

