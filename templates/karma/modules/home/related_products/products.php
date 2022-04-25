<?php
    $items = Templates::get_mod_args();

    //var_dump($items);
    foreach($items as $item):
?>

<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
	<div class="single-related-product d-flex">
		<a href="<?= $item['link'] ?>"><img src="<?= $item['img'] ?>" alt=""></a>
		<div class="desc">
			<a href="<?= $item['link'] ?>" class="title"><?= $item['name'] ?></a>
			<div class="price">
				<h6><?= $item['sale'] ?></h6>
				<h6 class="l-through"><?= $item['price'] ?></h6>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>
