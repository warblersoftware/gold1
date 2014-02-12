<!DOCTYPE html>
<html class="off-canvas" dir="ltr" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">
<meta charset="UTF-8">
<title>Pav Wines</title>
<!-- base href="http://demopavothemes.com/pav_wines/" -->
<meta name="description" content="Pav Wines">
<link href="http://demopavothemes.com/pav_wines/image/data/cart.png" rel="icon">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<style type="text/css">
		
		</style>
<link rel="stylesheet" type="text/css" href="css/font.css">
<link href="css/css.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/pavmegamenu.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/pavcontentslider.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/pavproductcarousel.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/pavblog.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/pavcarousel.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/colorbox.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/theme-responsive.css">

<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.js"></script>
<script type="text/javascript" src="js/jquery_002.js"></script>
<script type="text/javascript" src="js/common_002.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>

<!--[if IE 8]>         
 <link rel="stylesheet" type="text/css" href="catalog/view/theme/pav_wines/stylesheet/ie8.css" />
<![endif]-->
<!--[if lt IE 9]>
<script src="catalog/view/javascript/html5.js"></script>
<![endif]-->

</head>
<body class="fs12 page-common-home ">
<section id="page-container">
<?php include('header.php'); ?>

<?php include('nav.php'); ?>
<section id="slideshow" class="pav-slideshow">
	<div class="container">
<?php include('welcome.php'); ?>
 
			</div>
</section>


<section id="sys-notification"><div class="container"><div id="notification"></div></div></section>
<?php include('all_products.php'); ?>

<?php include('latest_blog.php'); ?>
<?php include('footer.php'); ?>

<script type="text/javascript">
	$("#pav-paneltool .pn-action").click( function(){
		$(this).toggleClass("open");
		$("#pav-paneltool").toggleClass('panel-open');
	} );
	$( ".box-patterns div").click( function(){
		var _c =  $("body").attr("class").replace(/pattern(\d+)/i,"");
		$("body").attr( "class", _c );
		$( ".box-patterns div").removeClass("active");
		$(this).addClass( "active" );
		$("body").addClass( $(this).attr("class") );
		$("#userparams_body_pattern").val( $(this).attr("class") );
	} );
	
	if( $("#userparams_body_pattern").val() ){
		$( ".box-patterns").find( "." + $("#userparams_body_pattern").val() ).addClass( "active" );
	}
</script></section>

</body></html>