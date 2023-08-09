<?php
/* Template Name: Menu page grid */
?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<main class="conteiner menu-page-conteiner">

	<?php get_template_part( 'template-parts/components/food_menu', null, [ 'title' => ( class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['menu_title'] ) : "" ) ] ); ?>

	<?php



	?>

	<div class="menu-page-conteiner__row">

		<?php $view_mode = isset( $_SESSION['View_Mode_Menu_Page'] ) ? $_SESSION['View_Mode_Menu_Page'] : 'grid'; ?>

		<?php
		$current = absint( max( 1, get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' ) ) );

		$posts_per_page = ( $view_mode == 'grid' ) ? 9 : 8;
		$query_Menu_items = rst_menu_page_WPquery( $posts_per_page, $current );

		if ( $query_Menu_items->have_posts() ) {
			while ( $query_Menu_items->have_posts() ) {
				$query_Menu_items->the_post();
				if ( class_exists( 'ACF' ) ) {
					get_template_part( 'template-parts/parts/prod_card', $view_mode );
				}
			}
		} else {
			// something
		} ?>

	</div>
	<?php get_template_part( 'template-parts/components/pagination', null, [ 'query' => $query_Menu_items, 'current' => $current ] ); ?>
	<?php wp_reset_postdata(); ?>

	<!-- </div> -->
	</div>

</main>

<?php get_template_part( 'template-parts/parts/speciality_block' ); ?>
<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>