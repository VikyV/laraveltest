<!DOCTYPE HTML>
<html>
<head>
    <title>@yield("title","Mon WonderEcommerce_Aky") </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="@yield("metakeyword","Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design")" />

    @section('stylesheet')
        <link href="{{ asset("css/bootstrap.css") }}" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="{{ asset("css/style.css") }}" rel='stylesheet' type='text/css' />
        <!-- start menu -->
        <link href="{{ asset("css/megamenu.css") }}" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary JavaScript plugins) -->
        <script type='text/javascript' src="{{ asset("js/jquery-1.11.1.min.js") }}"></script>
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    @show
    <!-- Custom Theme files -->
        <!--//theme-style-->

    @section('javascript')
        <!--//theme-style-->
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- start menu -->
           <script type="text/javascript" src="{{ asset("js/megamenu.js") }}"></script>
        <script>$(document).ready(function(){
                if ($(".megamenu").length > 0) {
                    $(".megamenu").megamenu();
                }
            });</script>
        <script src="{{ asset("js/menu_jquery.js") }}"></script>
    @show

</head>
<body>


@section('headerTop')
<!-- header_top -->
<div class="top_bg">
    <div class="container">
        <div class="header_top">
            <div class="top_right">
                <ul>
                    <li><a href="#">help</a></li>|
                    <li><a href="{{ route('contact') }}">Contact</a></li>|
                    <li><a href="#">Delivery information</a></li>
                </ul>
            </div>
            <div class="top_left">
                <h2><span></span> Call us : 032 2352 782</h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@show

@section('header')
<!-- header -->
<div class="header_bg">
    <div class="container">
        <div class="header">
            <div class="head-t">
                <div class="logo">
                    <a href="{{ route('home') }}  "><img src="{{ asset("images/logo.png") }}" class="img-responsive" alt=""/> </a>
                </div>
                <!-- start header_right -->
                <div class="header_right">
                    <div class="rgt-bottom">
                        <div class="log">
                            <div class="login" >
                                <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                                    <div id="loginBox">
                                        <form id="loginForm">
                                            <fieldset id="body">
                                                <fieldset>
                                                    <label for="email">Email Address</label>
                                                    <input type="text" name="email" id="email">
                                                </fieldset>
                                                <fieldset>
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password">
                                                </fieldset>
                                                <input type="submit" id="login" value="Sign in">
                                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                            </fieldset>
                                            <span><a href="#">Forgot your password?</a></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reg">
                            <a href="{{ route('register') }}">REGISTER</a>
                        </div>
                        <div class="cart box_1">
                            <a href="{{ route('checkout') }}">
                                <h3>
                                    <span class="simpleCart_total">$
                                        @if (session('panier'))
                                            {{ array_sum(array_column(session('panier'), 'prixTotal')) }}
                                        @else
                                            0
                                        @endif

                                    </span>
                                    (<span id="simpleCart_quantity" class="simpleCart_quantity">
                                        @if (session('panier'))
                                            {{ array_sum(array_column(session('panier'), 'qty')) }}
                                        @else
                                            0
                                        @endif
                                    </span> items)<img src="{{ asset('images/bag.png') }}" alt=""></h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="create_btn">
                            <a href="{{ route('checkout') }}">CHECKOUT</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="search">
                        <form>
                            <input type="text" value="" placeholder="search...">
                            <input type="submit" value="">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
@show

@section('Startheader')
            <!-- start header menu -->
            <ul class="megamenu skyblue">

                <li class="active grid"><a class="color1" href="{{ route('home') }}">Home</a></li>
                @foreach($globalNavCategorie as $Caty)
                    <li class="active grid"><a class="color1" href="{{ route("categorie", ["id"=>$Caty->id]) }}">{{$Caty->name}}</a></li>
                @endforeach

                <!--
                <li class="grid"><a class="color2" href="#">new arrivals</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="{{ route('register') }}">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color4" href="#">TUXEDO</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="{{ route('register') }}">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color5" href="#">SWEATER</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="{{ route('register') }}">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color6" href="#">SHOES</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>

                <li><a class="color7" href="#">GLASSES</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>

                <li><a class="color8" href="#">T-SHIRT</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="{{-- route('register') --}}">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color9" href="#">WATCHES</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                -->
            </ul>
        </div>
    </div>
</div>
@show
















@yield('content')
























<div class="foot-top">
    <div class="container">
        <div class="col-md-6 s-c">
            <li>
                <div class="fooll">
                    <h5>follow us on</h5>
                </div>
            </li>
            <li>
                <div class="social-ic">
                    <ul>
                        <li><a href="#"><i class="facebok"> </i></a></li>
                        <li><a href="#"><i class="twiter"> </i></a></li>
                        <li><a href="#"><i class="goog"> </i></a></li>
                        <li><a href="#"><i class="be"> </i></a></li>
                        <li><a href="#"><i class="pp"> </i></a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
            </li>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-6 s-c">
            <div class="stay">
                <div class="stay-left">
                    <form>
                        <input type="text" placeholder="Enter your email to join our newsletter" required="">
                    </form>
                </div>
                <div class="btn-1">
                    <form>
                        <input type="submit" value="join">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>


    <div class="footer">
        <div class="container">
            <div class="col-md-3 cust">
                <h4>CUSTOMER CARE</h4>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">How To Buy</a></li>
                <li><a href="#">Delivery</a></li>

            </div>

            <div class="col-md-2 abt">
                <h4>ABOUT US</h4>
                <li><a href="#">Our Stories</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </div>
            <div class="col-md-2 myac">
                <h4>MY ACCOUNT</h4>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="#">My Cart</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">Payment</a></li>


            </div>

            <div class="col-md-3 cust">
                <h4>MORE</h4>
                <li><a href="{{ route('feedback') }}">Feedback</a></li>
                <div class="cr_btn1">
                    <li><a href="{{ route('ajouterCategory') }}">AjouterCategory</a></li>
                </div>
                <div class="cr_btn">
                    <li><a href="#">SOLO</a> </li>
                </div>
            </div>
            <hr>
            <div class="row"></div>
            <div class="col-md-12 our-st">
                @foreach ($globalTweets as $tweet)
                <div class="our-left">
                    <h4>TWITTER</h4>

                <div class="clearfix"> </div>


                <li><i class="fa fa-twitter"></i><small>{!! \Twitter_Autolink::create()->autolink($tweet->text) !!}</small></li>

                </div>
                @endforeach
                </div>
            </div>
            <div class="clearfix"> </div>
            <p>Copyrights © 2016 IAmME. All rights reserved | Forever </a></p>
        </div>
    </div>
@yield("footer-script")
</body>
</html>
