<section id="header">
	<div id="headertop" class="hidden-tablet hidden-phone ">
		<div class="container">
			<div class="row-fluid">
				<div class="span10">
					<div class="login pull-left">
												Welcome visitor you can <a href="http://demopavothemes.com/pav_wines/index.php?route=account/login">login</a> or <a href="http://demopavothemes.com/pav_wines/index.php?route=account/register">create an account</a>.						 
					</div>
					<div class="links  pull-left">
						<a class="first" href="http://demopavothemes.com/pav_wines/index.php?route=common/home">Home</a>
						<a href="http://demopavothemes.com/pav_wines/index.php?route=account/wishlist" id="wishlist-total">Wish List (0)</a>
						<a href="http://demopavothemes.com/pav_wines/index.php?route=account/account">My Account</a>
						<a href="http://demopavothemes.com/pav_wines/index.php?route=checkout/cart">Shopping Cart</a>
						<a class="last" href="http://demopavothemes.com/pav_wines/index.php?route=checkout/checkout">Checkout</a>
						
					</div>
				</div>
				<div class="span2">
					<div class="currency pull-right">
						<form action="http://demopavothemes.com/pav_wines/index.php?route=module/currency" method="post" enctype="multipart/form-data">
  <div id="currency">                <a title="Euro" onClick="$('input[name=\'currency_code\']').attr('value', 'EUR'); $(this).parent().parent().submit();">€</a>
                        <a title="Pound Sterling" onClick="$('input[name=\'currency_code\']').attr('value', 'GBP'); $(this).parent().parent().submit();">£</a>
                        <a title="US Dollar"><b>$</b></a>
                <input name="currency_code" value="" type="hidden">
    <input name="redirect" value="http://demopavothemes.com/pav_wines/index.php?route=common/home" type="hidden">
  </div>
</form>
					</div> 
					<div class="language pull-right">
						<form action="http://demopavothemes.com/pav_wines/index.php?route=module/language" method="post" enctype="multipart/form-data">
  <div id="language">        <img src="images/gb.png" alt="English" title="English" onClick="$('input[name=\'language_code\']').attr('value', 'en'); $(this).parent().parent().submit();">
        <img src="images/fr.png" alt="French" title="French" onClick="$('input[name=\'language_code\']').attr('value', 'fr'); $(this).parent().parent().submit();">
        <input name="language_code" value="" type="hidden">
    <input name="redirect" value="http://demopavothemes.com/pav_wines/index.php?route=common/home" type="hidden">
  </div>
</form>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<div id="headerbottom">
		<div class="container">
			<div class="row-fluid">


		 						<div class="span4 hidden-phone">
					<div class="box delivery">
						<div id="freeship">
<h4>Free delivery !</h4>
<span>on order over $7.00</span></div>
				</div>
				</div>
				 
				<div class="span4">
				  				  <div id="logo"><a href="http://demopavothemes.com/pav_wines/index.php?route=common/home"><img src="images/logo.png" title="Pav Wines- Responsive Opencart Theme" alt="Pav Wines- Responsive Opencart Theme"></a></div>
				  				
				</div>

				<div class="span4 hidden-phone">
					<div class="cart-top pull-right">
						<div id="cart">
  <div class="heading">
    <h4>Shopping Cart</h4>
    <a><span id="cart-total">0 item(s) - $0.00</span></a></div>
  <div class="content">
        <div class="empty">Your shopping cart is empty!</div>
      </div>
</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>