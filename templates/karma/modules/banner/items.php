<?php
    global $template_module_args;
    $items = $template_module_args;
	global $banneritem;
    foreach($items as $banneritem): ?>

	<!-- single-slide -->
	<div class="row single-slide align-items-center d-flex">
		<div class="col-lg-5 col-md-6">
	        {% banner-content %}
		</div>
		<div class="col-lg-7">
			{% banner-image %}
		</div>
	</div>
<?php endforeach;?>