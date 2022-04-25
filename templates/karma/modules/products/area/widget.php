<?php

    $items = Templates::get_mod_args();

    $title = $items[0];
    $subtitle = $items[1];
    //var_dump($items);

?>		
        
        <!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>{{ $title }}</h1>
							<p>{{ $subtitle }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
                    <?php for($i = 0; $i < count($items[2]); $i++) : ?>
                    <?php 
                    //var_dump($items[$i]);

                        $name = $items[2][$i][0];    
                        $price = $items[2][$i][1];
                        //echo "trr".$name;
                        //var_dump($items[$i][0]);
                        $image = $items[2][$i][2];

                        $sale = null;
                        if(count($items[2][$i]) > 3)
                        {
                            $sale = $items[2][$i][1];
                            $price = $items[2][$i][3];
                        } 
                        ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" {{$image}} alt="">
							<div class="product-details">
								<h6>{{$name}}</h6>
								<div class="price">
									<h6>{{$price}}</h6>

									<?php if($sale != null): ?>
                                        <h6 class="l-through">{{$sale}}</h6>
                                    <?php endif; ?>
								</div>
								{% products-area-bottom %}
							</div>
						</div>
					</div>
                    <?php endfor; ?>
				</div>
			</div>
		</div>