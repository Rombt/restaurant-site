<?php get_header(); ?>
<?php get_template_part('template-parts/parts/head_pages'); ?>

<main class="rstr-container menu-page-container">

	<?php get_template_part(
		'template-parts/components/food_menu',
		null,
		[
			'title' => (class_exists('ReduxFramework') ? esc_html__($restaurant_site_options['menu_title']) : "")
		]
	); ?>

	<div class="menu-page-conteiner__row">

		<?php
		$view_mode = isset($_SESSION['View_Mode_Menu_Page']) ? $_SESSION['View_Mode_Menu_Page'] : 'grid';
		if (class_exists('ReduxFramework')) {
			if ($view_mode == 'grid') {
				$posts_per_page = esc_html($restaurant_site_options['menu_page_grid_posts_per_page']);
			} else {
				$posts_per_page = esc_html($restaurant_site_options['menu_page_list_posts_per_page']);
			}
		}

		$query_Menu_items = rstr_custom_WPquery('food_menu_items', $posts_per_page);
		if ($query_Menu_items->have_posts()) {
			while ($query_Menu_items->have_posts()) {
				$query_Menu_items->the_post();
				if (class_exists('ACF')) {
					get_template_part('template-parts/parts/prod_card', $view_mode);
				}
			}
		?>
	</div>
<?php get_template_part('template-parts/components/pagination', null, ['query' => $query_Menu_items]);
		} else {
			// something
		}
?>

<?php wp_reset_postdata(); ?>

</div>

</main>

<?php get_template_part('template-parts/parts/speciality_block'); ?>
<?php get_template_part('template-parts/components/opening_hours'); ?>

<?php get_footer(); ?>