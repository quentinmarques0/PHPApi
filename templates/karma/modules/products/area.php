	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
    <?php API::getController()->getLatestProducts() ?>
        {% products-area-widget %}

        <?php API::getController()->getComingProducts() ?>
        {% products-area-widget %}
	</section>
	<!-- end product Area -->