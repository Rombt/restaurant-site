<div class="recipe-card-grid-2">
	<figure class="wrap-img"><img src="@@img_src" alt=""></figure>
	<div class="recipe-card-grid-2__body">
		<div class="recipe-card-grid-2__title">
			<h3>@@title</h3>
			<div class="rating">
				<img src="@img/rating-star.png" alt="">
				<img src="@img/rating-star.png" alt="">
				<img src="@img/rating-star.png" alt="">
				<img src="@img/rating-star.png" alt="">
				<img src="@img/rating-star.png" alt="">
			</div>
		</div>
		<p>@@description</p>
		<?php // get_template_part( 'template-parts/components/button', 'orange' ) ?>
		<!-- @@include('button-orange.html',{'mod':'','title':'recipe details', 'href':'recipie-details.html'}) -->

		<?php
		get_template_part( 'template-parts/components/button', 'orange', [ 
			'href' => esc_html__( "*****************" ),
			'title' => esc_html__( "#" ),
		] );
		?>
	</div>
</div>