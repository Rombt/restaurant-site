<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>
<?php
if ( class_exists( 'ReduxFramework' )
	&& $restaurant_site_options['rating-star-active_img']['url']
	&& $restaurant_site_options['rating-star-passive_img']['url']
) {
	wp_localize_script( 'restaurant_site-app', 'rstrStarIconImg', [ 
		'rstrStarIconImgActive' => esc_url( $restaurant_site_options['rating-star-active_img']['url'] ),
		'rstrStarIconImgPasive' => esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ),
		'rstrAjaxNonceStar' => wp_create_nonce( 'rstr-ajax-nonce-star' ),
	] );
}
?>


<div class="conteiner recipes-title">
	<div class="recipes-title__row">
		<h1>
			<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['recipes_title'] ) : ""; ?>
		</h1>
		<div class="recipes-title__subtitle">
			<?php echo class_exists( 'ReduxFramework' ) ? wp_kses( $restaurant_site_options['recipes_subtitle'], 'post' ) : ""; ?>
		</div>

	</div>
</div>
<main class="conteiner recipes-page-conteiner">
	<div class="recipes-page-conteiner__row">

		<?php
		$view_mode = isset( $_SESSION['View_Mode_Recipe_Page'] ) ? $_SESSION['View_Mode_Recipe_Page'] : '3_columns';
		$current = absint( max( 1, get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' ) ) );

		if ( class_exists( 'ReduxFramework' ) ) {
			if ( $view_mode == '3_columns' ) {
				$posts_per_page = esc_html( $restaurant_site_options['recipes_page_3_columns_posts_per_page'] );
			} else {
				$posts_per_page = esc_html( $restaurant_site_options['recipes_page_2_columns_posts_per_page'] );

			}
		}

		$query_Recipes = rstr_custom_WPquery( 'recipes', $posts_per_page, $current );
		if ( $query_Recipes->have_posts() ) {
			while ( $query_Recipes->have_posts() ) {
				$query_Recipes->the_post();
				if ( class_exists( 'ACF' ) ) {
					get_template_part( 'template-parts/parts/recipe_card', $view_mode );
				}
			}
			?>
		</div>
		<?php
		get_template_part( 'template-parts/components/pagination', null, [ 'query' => $query_Recipes, 'current' => $current ] );
		} else {
			// something
		}
		wp_reset_postdata();
		?>

</main>

<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>