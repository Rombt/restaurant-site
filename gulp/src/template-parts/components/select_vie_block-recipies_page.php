<div class="select-vie-block-conteiner">
	<div class="recipies-title-nav recipies-title__nav">
		<div class="select-view">



			<?php // echo '<div class="select-view__colomns"></div> <h3> ' . $_SESSION['View_Mode_Menu_Page'] . '</h3> </div>'; ?>

			<?php

			if ( is_post_type_archive( 'food_menu_items' ) ) {
				$view_mode = 'list';

				if ( isset( $_SESSION['View_Mode_Menu_Page'] ) ) {
					$view_mode = ( $_SESSION['View_Mode_Menu_Page'] == 'list' ) ? 'grid' : 'list';
				} else {
					$view_mode = 'list';
				}
				echo '<div class="select-view__colomns"> <h3>' . $view_mode . '</h3> </div>';

			} elseif ( is_post_type_archive( 'recipes' ) ) {
				echo '<div class="select-view__colomns"><h3>2 column</h3></div>';
			}
			?>
		</div>
		<div class="recipies-title-nav__brows-recipes">
			<h3>Brows Recipes</h3>
			<div class="menu-recipies-burger burger-open">
				<span></span>
			</div>
			<!-- // НУЖНЫЙ код времмено закоментировал что бы не сыпались ошибки  //todo доработать!-->
			<!-- <nav class="menu-recipies">				
				<ul class="menu-recipies__list">
					<li>
						<a href="#">
							<img src="@img/title-nav__icon_breakfast.png" alt="">
							<p>Breakfast</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="@img/title-nav__icon_starter.png" alt="">
							<p>Starter</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="@img/title-nav__icon_lunch.png" alt="">
							<p>Lunch</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="@img/title-nav__icon_icon_dinner.png" alt="">
							<p>Dinner</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="@img/title-nav__icon_icon_dessert.png" alt="">
							<p>Dessert</p>
						</a>
					</li>
				</ul>
			</nav> -->
		</div>
	</div>
</div>



<!-- if ( is_page( 'menu-page-grid' ) ) {


		} elseif ( is_page( 'recipies-page' ) ) {

	} -->