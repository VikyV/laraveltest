@extends("layout")
@section('title')
	Checkout
@stop





@section("content")
	<div class="row">

		</div>
<div class="container">
	<div class="check">	 
			 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>

			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">{{ $prix }}</span>
				 <span>Quantity</span>
				 <span class="checkout_cart_total_product" class="total1">@if (session('panier'))
						 {{ array_sum(array_column(session('panier'), 'qty')) }}
					 @else
						 0
					 @endif</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span id="checkout_cart_total_price">
					   {{ $prix }}
				   </span></li>
			   <div class="clearfix"> </div>
			 </ul>

			 
			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>

		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (<span class="checkout_cart_total_product">{{ array_sum(array_column(session('panier'), 'qty')) }}</span>)</h1>


				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						//permet de couper le comportement du href et en enlevant cela se supprim sans le fadeout
						c.preventDefault();
						var urlDelete = $(this).parent('a').attr('href');
						console.log(urlDelete);
						$.ajax({
							url: urlDelete,
							dataType: 'json'
						}).done(function(data){
							console.log('donnée : ', data);
							$('#checkout_cart_total_price').html(data.totalPanier);
							$('.checkout_cart_total_product').html(data.nombreDeProduit);

							$('.simpleCart_total').html('$ '+data.totalPanier);
							$('#simpleCart_quantity').html(data.nombreDeProduit);
						});

						$(this).closest('.cart-header').fadeOut('slow', function(c){
							$(this).remove();
						});
						});	  
					});
			   </script>



			 @foreach ($achat as $buy)
			 <div class="cart-header">
				 <a href="{{ route('deleteproduct', ['id' => $buy->id]) }}"><div class="close1"> </div></a>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="{{ asset("images/8.jpg") }}" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">{{$buy->title}}</a><span>{{$buy->brand}}</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>

							<li><p>Qty :
									<form name="quantity" method="POST" action="{{ route('updateproduct', ['id' => $buy->id]) }}">
									{{ csrf_field() }}
								<select name="quantite"  id="">
									@for ($stock = 1; $stock <= $buy->quantity; $stock++)

										{
											@if ( $stock == $qty[$buy->id]['qty'] )
											{
												<option selected>{{ $qty[$buy->id]['qty']  }}</option>
											}
											@else
											{
												<option>{{ $stock }}</option>
											}

										}
										@endif
									@endfor
								</select> <button href=" {{ route('updateproduct', ['id' =>  $buy->id]) }}">UPDATE</button>
								</form></p></li>
						</ul>

							 <div class="delivery">
							 <p>Unit Price : {{  $buy->price }}</p>
								 <br>
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 @endforeach


			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>

		 </div>

		
			<div class="clearfix"> </div>
	 </div>
	 </div>
</div>
@stop