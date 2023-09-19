<?php global $restaurant_site_options; ?>
<div class="recipe-card-3col">
	<figure class="wrap-img"><img src="<?php the_post_thumbnail_url() ?>" alt=""></figure>
	<div class="recipe-card-3col__body">
		<div class="recipe-card-3col__title">
			<h3>
				<?php _e( the_title(), 'restaurant-site' ); ?>
			</h3>
		</div>
		<?php get_template_part( './components/rating-block' ) ?>
		<!-- <div class="rating">
			<img src="<?php // echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
			<img src="<?php // echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
			<img src="<?php // echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
			<img src="<?php // echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
			<img src="<?php // echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
		</div> -->
	</div>
	<p>
		<?php echo rstr_trim_excerpt( 20 ) ?>
	</p>

	<?php get_template_part( 'template-parts/components/button', 'orange', [ 'title' => 'recipe details', 'href' => esc_attr( get_permalink() ),] ) ?>
</div>