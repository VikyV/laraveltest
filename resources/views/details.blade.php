@extends("layout")
	@section('title')
	Details
@stop
@section("content")
<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start content -->
			<div class="row single">
				<div class="col-md-9 det">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							        <!-- FlexSlider -->
										<script src="{{ asset("js/imagezoom.js")}}"></script>
										  <script defer src="{{ asset("js/jquery.flexslider.js") }}"></script>
										<link rel="stylesheet" href="{{ asset("css/flexslider.css") }}" type="text/css" media="screen" />

										<script>
										// Can also be used with $(document).ready()
										$(window).load(function() {
										  $('.flexslider').flexslider({
											animation: "slide",
											controlNav: "thumbnails"
										  });
										});
										</script>
									<!-- //FlexSlider-->

							  <ul class="slides">
								<li data-thumb="{{ asset("images/d1.jpg")}}">
									<div class="thumb-image"> <img src="{{ asset("images/d1.jpg")}}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="{{ asset("images/d2.jpg")}}">
									 <div class="thumb-image"> <img src="{{ asset("images/d2.jpg")}}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="{{ asset("images/d3.jpg")}}">
								   <div class="thumb-image"> <img src="{{ asset("images/d3.jpg")}}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="{{ asset("images/d4.jpg")}}">
								   <div class="thumb-image"> <img src="{{ asset("images/d4.jpg")}}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
							  </ul>
							<div class="clearfix"></div>
						</div>
					</div>

				  <div class="desc1 span_3_of_2">

					<h3>{{ $produit->title }}</h3>
					<span class="brand">Brand: <a href="#">{{ $produit->brand }}</a></span>
					<br>
					<span class="code">Product Categorie : {{ $produit->categorie->name }}</span>
					<p>when an unknown printer took a galley of type and scrambled it to make</p>
						<div class="price">
							<span class="text">Price:</span>
							<span class="price-new">${{ $produit->price }}</span><span class="price-old">$100.00</span>
							<span class="price-tax">Ex Tax: $90.00</span><br>
							<span class="points"><small>Price in reward points: 400</small></span><br>

						</div>
					<div class="det_nav1">
						<h4>Select a size :</h4>
							<div class=" sky-form col col-4">
								<ul>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>
								</ul>
							</div>
					</div>
					<div class="btn_form">
						<a href="{{ route('addproduct', ['id' =>  $produit->id]) }}">buy</a>
					</div>
					<a href="#"><span>login to save in wishlist </span></a>
					
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc">{{ $produit->description }}</p>
				</div>

				<div class="single-bottom2">
					<h6>Related Products from the same Category : {{ $produit->categorie->name }}</h6>
						<div class="product">
							@foreach( $productsSameCat as $prsmc)
							   <div class="product-desc">
									<div class="product-img">
									   <img src="{{ asset("images/w9.jpg")}}" class="img-responsive " alt=""/>
									</div>

								   <div class="prod1-desc">
									   <h5><a class="product_link" href="#">
											   {{ $prsmc->title }}</a></h5>
									   <p class="product_descr"> {{ $prsmc->description  }} </p>

								   </div>
								  <div class="clearfix"></div>
							  </div>
							  <div class="product_price">
									<span class="price-access">${{ $prsmc->price  }}</span>
									<button class="button1"><span>Add to cart</span></button>
							  </div>
							@endforeach
						</div>
				</div>
					<div class="clearfix"></div>

				</div>

	<div class="col-md-3">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<h4>All</h4>
			<ul>
				<li><a href="women.html">women</a></li>
				<li><a href="#">new arrivals</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">boys</a></li>
				<li><a href="#">girls</a></li>
				<li><a href="#">sale</a></li>
			</ul>	
		</div>
		<h3>filter by</h3>
		<section  class="sky-form">
					<h4>categories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kutis</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>churidar kurta</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>salwar</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>printed sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>	
							</div>
						</div>
		</section>
		<section  class="sky-form">
					<h4>brand</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>																								
							</div>
						</div>
		</section>
		<section class="sky-form">
			<h4>colour</h4>
			<ul class="w_nav2">
				<li><a class="color1" href="#"></a></li>
				<li><a class="color2" href="#"></a></li>
				<li><a class="color3" href="#"></a></li>
				<li><a class="color4" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
				<li><a class="color12" href="#"></a></li>
				<li><a class="color13" href="#"></a></li>
				<li><a class="color14" href="#"></a></li>
				<li><a class="color15" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
			</ul>
		</section>
		<section class="sky-form">
						<h4>discount</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
							</div>
						</div>						
		</section>
	</div>
   </div>
		   <div class="clearfix"></div>		
	  </div>
	<!-- end content -->
</div>
</div>
@stop