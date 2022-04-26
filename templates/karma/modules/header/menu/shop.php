<li class="nav-item {{ ifanyphpref(["category", "product_details", "checkout", "cart", "confirmation"],"active") }} submenu dropdown">
	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
	 aria-expanded="false">{# KARMA_SHOP #}</a>
	<ul class="dropdown-menu">
		<li class="nav-item"><a class="nav-link" {{ phpref("category") }}>{# KARMA_SHOP_CATEGORY #}</a></li>
		<li class="nav-item"><a class="nav-link" {{ phpref("product_details") }}>{# KARMA_PRODUCT_DETAILS #}</a></li>
		<li class="nav-item"><a class="nav-link" {{ phpref("checkout") }}>{# KARMA_PRODUCT_CHECKOUT #}</a></li>
		<li class="nav-item"><a class="nav-link" {{ phpref("cart") }}>{# KARMA_SHOPPING_CART #}</a></li>
		<li class="nav-item"><a class="nav-link" {{ phpref("confirmation") }}>{# KARMA_CONFIRMATION #}</a></li>
	</ul>
</li>