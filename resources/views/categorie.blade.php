@extends("layout")
@section('title')
	Details
	@stop
	@section("content")

	<!-- start content -->
	<div class="container">
	<div class="col-md-12 w_content">
		<div class="women">
			<a href="#"><h4>{{$categorie->name}} </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="{{ route('categorie', ['id' => $categorie->id, 'price' => 'asc']) }}">price: Low </a></li>
						<li><a href="{{ route('categorie', ['id' => $categorie->id, 'price' => 'desc']) }}">price: High </a></li>
		     			<div class="clear"></div>
		     </ul>
		     <div class="clearfix"></div>	
		</div>
		<!-- grids_of_4 -->
		<div class="grids_of_4">

			@foreach($priceOrder as $prod)
			<div class="grid1_of_4">
				<div class="content_box"><a href="{{ route ('details', ['id'=>$prod->id]) }}">
			   	   	 <img src="{{ asset("images/w1.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="{{ route ('details', ['id'=>$prod->id]) }}"> {{ $prod ->title }}</a></h4>
				     <p>{{ $prod ->description }}</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY ${{ $prod ->price }}</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="{{ route('addproduct', ['id' =>  $prod->id]) }}">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
		@endforeach
			<div class="clearfix"></div>
		</div>
		
		
		<div class="grids_of_4">
		 <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="{{ asset("images/w5.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY $109.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="{{ asset("images/w6.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY $95.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="{{ asset("images/w7.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY $68.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="{{ asset("images/w8.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY $74.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="grids_of_4">
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="{{ asset("images/w9.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY $80.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="{{ asset("images/w10.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY $65.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="{{ asset("images/w11.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY $90.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="{{ asset("images/w12.jpg")}}" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>ONLY $75.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- end grids_of_4 -->
		
		
	</div>
	<div class="clearfix"></div>
	
	<!-- end content -->
</div>
</div>

@stop