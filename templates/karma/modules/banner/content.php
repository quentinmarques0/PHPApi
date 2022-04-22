<?php global $banneritem; ?>
<div class="banner-content">
	<h1><?= $banneritem['title'] ?></h1>
	<p><?= $banneritem['desc']?></p>
	{% banner-see-more %}
</div>