<div class="cart">
							<?php
							global $woocommerce;
							$items = $woocommerce->cart->get_cart();

							 ?>
              <a href="/cart/" class="btn__one cart__link">
								<img src="<?php bloginfo('template_url'); ?>/img/svg/cart-icon.svg" alt="">
								Корзина ( <span id="cart-count"><?php echo count($items); ?></span> )
							</a>
							<div class="cart-dropdown">
								<?php


													if(count($items) == 0){
														echo '<p>Товаров в корзине нет</p>';
													} else {


													foreach($items as $item => $values) { ?>
													<div class='dropdown__item'>
													<?php
													$_product =  wc_get_product( $values['data']->get_id() );

													$product_details = wc_get_product( $values['product_id'] );

													echo $product_details->get_image(); ?>
													<a class="dropdown__info" href="<?php the_permalink(); ?>">
													<span class="dropdown__title"><?php echo $product_details->get_title(); ?></span>
														<div class="dropdown__details">
															<?php
																	echo $values['quantity'];
																	echo " X ";
																	echo $product_details->get_price();
															 ?>
														</div>
													</a>

													<span class="dropdown__remove" data-productid="<?php echo $values['product_id']; ?>" data-nonce="<?php echo wp_create_nonce('my_delete_post_nonce') ?>">x</span>
												</div>
											<?php } //foreach ?>
											<p class="dropdown__total">Итого: <?php echo  $woocommerce->cart->total; ?></p>
											<a href="/cart/" class="dropdown__button">Корзина</a>
											<?php } ?>
							</div>
            </div>