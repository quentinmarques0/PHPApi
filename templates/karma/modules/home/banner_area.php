<?php
    global $template_module_args;
    $items = $template_module_args;
?>

	<!-- start banner Area -->
    
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
                        <?php foreach($items as $item): ?>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1><?= $item['title'] ?></h1>
									<p><?= $item['desc']?></p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="<?=$item['page'] ?>">
                                        <span style="padding: 35%;" class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Voir</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?= $item['img']?>" alt="">
								</div>
							</div>
						</div>
                        <?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->