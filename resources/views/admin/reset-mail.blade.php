@extends("layout")
@section('title')
    Register
@stop
@section('title')
    Change Password
@stop



@section("content")
@section('stylesheet')
        @parent

    <link href="{{ asset("css/bootstrap-responsive.css") }}" rel="stylesheet">
    <link href="{{ asset("css/core.css")}}" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">

</head>

<body>

<div class="container">

    <div class="surface">
        <div class="account-header">
            This is account header
        </div>
        <div class="account-content">
            <form>
                <h2 class="form-signin-heading">Password Reset</h2>

                <input type="password" class="input-block-level" placeholder="New Password">
                <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>

                <input type="password" class="input-block-level" placeholder="New Password Again">
                <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>

                <button class="btn btn-large btn-primary btn-block" type="submit">Submit</button>


            </form>
        </div>
    </div>





</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-typeahead.js"></script>

</body>
</html>