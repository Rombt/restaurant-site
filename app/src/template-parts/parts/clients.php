<?php global $restaurant_site_options; ?>
<?php

if (class_exists('ACF')) {

	$params = [
		'post_type' => 'our-clients',
		'posts_per_page' => -1,
		'meta_query' => [
			'relation' => 'OR',
			[
				'key' => 'our-clients_show-slider-happy-clients',
				'value' => 'a:1:{i:0;s:4:"show";}',
				'compare' => 'LIKE',
			],
			[
				'key' => 'our-clients_show-slider-happy-clients',
				'value' => 'show',
				'compare' => 'LIKE',
			],
		],
	];
} else {
	$params = [
		'post_type' => 'our-clients',
		'posts_per_page' => 4,
	];
}
$query_Our_clients = new WP_Query($params);
?>


<div class="background background__clients">
	<div class="wrap-img background-clients__wrap-img">
		<img src="<?php echo rstr_get_pic_url('clients-section_background_img') ?>" alt="">
	</div>

	<section class="rstr-container" id="clients">
		<h2 class="slide-body__title">
			<?php class_exists('ReduxFramework') ? _e($restaurant_site_options['clients-section_title'], 'restaurant-site') : '' ?>
		</h2>
		<div class="swiper swiper-clients">
			<div class="swiper-wrapper  clients__swiper-wrapper">

				<?php if ($query_Our_clients->have_posts()) {
					while ($query_Our_clients->have_posts()) {
						$query_Our_clients->the_post(); ?>

						<div class="swiper-slide">
							<div class="slide-body">
								<div class="slide-body__text">
									<?php echo rstr_trim_excerpt(50) ?>
								</div>
								<a href="<?php echo get_permalink(); ?>">
									<div class="wrap-img slide-body__client-avatar">
										<?php
										if (has_post_thumbnail($id)) {
											echo get_the_post_thumbnail($id, 'thumbnail');
										} else { ?>
											<svg>
												<use xlink:href="<?php echo rstr_get_pic_url('clients-section_avatar_default') ?>">
												</use>
											</svg>
										<?php } ?>
									</div>

									<div class="name">

										<?php echo the_title(); ?>
									</div>
								</a>
								<div class="rating">
									<img src="@img/star-rating-icon.png" alt="">
									<img src="@img/star-rating-icon.png" alt="">
									<img src="@img/star-rating-icon.png" alt="">
									<img src="@img/star-rating-icon.png" alt="">
									<img src="@img/star-rating-icon.png" alt="">
								</div>
							</div>
						</div>
				<?php
					}
					wp_reset_postdata();
				} else {
					// something
				}
				?>


			</div>
			<div class="swiper-button-next swiper-clients__button-next"></div>
			<div class="swiper-button-prev swiper-clients__button-prev"></div>
		</div>
	</section>
</div>