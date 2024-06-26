<aside class="shop-sidebar">
	<div class="shop-sidebar__body">

		<section class="widget-food-category">
			<h2>Food Category</h2>
			<ul>
				<li><a href="#">consectetur adipiscing</a></li>
				<li><a href="#">Phasellus tortor</a></li>
				<li><a href="#">ullamcorper</a></li>
				<li><a href="#">auguerossuscipit</a></li>
				<li><a href="#">semper interdum.</a></li>
				<li><a href="#">magna consectetur</a></li>
				<li><a href="#">bibendum blandit</a></li>
			</ul>
		</section>

		<section class="widget-filter-by-price">
			<h2>Filter by Price</h2>
			<div class="widget-filter-by-price__block">
				<p>$20</p>
				<p>$150</p>
				<div class="widget-filter-by-price__line"></div>
				<div class="widget-filter-by-price__line-active"></div>
			</div>
		</section>

		<section class="widget-newsletter">
			<h2>Newsletter</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
			<a href="#" class="widget-newsletter__email-address"> Email Address </a>

			<!-- @@include('./button-orange.html',{'mod':'','title':'Subscribe', 'href':'#'}) -->
			<?php get_template_part( 'template-parts/components/button', 'orange', [ 
				'href' => ( class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['button_href_contact-page'] ) : "" ),
				// todo  
				'title' => ( class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['button_title_contact-page'] ) : "" ),
			] );
			?>

		</section>

		<div class="touch-toggle toggle-on">
			<img src="@img/orang-sercle.png" class="read__cercle" alt="orang sercle">
		</div>

	</div>
</aside>