<?php



class rstr_Recent_Posts_Widget extends WP_Widget {
	// function __construct($id_base, $name, $widget_options = array(), $control_options = array()){
	function __construct() {
		parent::__construct(
			'rstr_recent_posts_widget',
			esc_html__( 'Recent posts', 'restaurant-site' ),
			// $widget_options = array(
			array(
				'description' => esc_html__( '***Shows recent posts***', 'restaurant-site' )
			),
			// $control_options = array() 
		);
	}


	public function widget( $args, $instance ) {

		extract( $args );

		$title = apply_filters( 'widget_title', $instance['title'] );



		// $text = apply_filters( 'the_content', $instance['posts_per_page'] );
		$posts_per_page = apply_filters( 'the_content', $instance['posts_per_page'] );



		$posts_per_page = $instance['posts_per_page'];

		echo $before_widget;

		echo "<pre>";
		print_r( $instance );
		echo "</pre>";



		?>
		<section class="recent-post">
			<h2>
				<?php if ( $title )
					echo $before_title . esc_html( $title ) . $after_title; ?>
			</h2>
			<?php


			$q = new WP_Query( "posts_per_page=$posts_per_page&orderby=comment_count" );
			if ( $q->have_posts() ) :
				?>
				<div class="recent-post-slider">
					<?php
					while ( $q->have_posts() ) :
						$q->the_post(); ?>


						<!-- <li><a href="<?php // the_permalink() ?>"><?php // the_title() ?></a></li> -->


						<a href="<?php the_permalink() ?>" class="recent-post__row">
							<div class="wrap-img recent-post__img">
								<img src="@img/Image_70x70.jpg" alt="thimb recent post">
							</div>
							<div class="recent-post__body">
								<p>08-nov-2016</p>
								<span>
									<?php the_title() ?>
								</span>
							</div>
						</a>


					<?php endwhile; ?>
				</div>
			<?php endif;
			wp_reset_postdata(); ?>


			<div class="recent-post-slider">


				<a href="#" class="recent-post__row">
					<div class="wrap-img recent-post__img">
						<img src="@img/Image_70x70.jpg" alt="thimb recent post">
					</div>
					<div class="recent-post__body">
						<p>08-nov-2016</p>
						<span>Suspendisse eu dui libero malesuada</span>
					</div>
				</a>



				<a href="#" class="recent-post__row">
					<div class="wrap-img recent-post__img">
						<img src="@img/Image_70x70.jpg" alt="thimb recent post">
					</div>
					<div class="recent-post__body">
						<p>13-nov-2016</p>
						<span>Quisque pellentes turpis sit amet</span>
					</div>
				</a>


				<a href="#" class="recent-post__row">
					<div class="wrap-img recent-post__img">
						<img src="@img/Image_70x70.jpg" alt="thimb recent post">
					</div>
					<div class="recent-post__body">
						<p>20-nov-2016</p>
						<span>Suspendisse eu dui libero malesuada</span>
					</div>
				</a>
			</div>
			<div class="pagination"></div>
		</section>

		<?php

		echo $after_widget;

		?>
		<!-- <br>
		<hr>
		<hr>
		<br> -->
		<?php
	}

	public function form( $instance ) {



		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$posts_per_page = ! empty( $instance['posts_per_page'] ) ? $instance['posts_per_page'] : 5;


		// if ( isset( $instance['title'] ) ) {
		// 	$title = $instance['title'];
		// } else {
		// 	$title = '';
		// }

		// if ( isset( $instance['posts_per_page'] ) ) {
		// 	$posts_per_page = $instance['posts_per_page'];
		// } else {
		// 	$posts_per_page = 5;
		// }

		echo "<pre>";
		print_r( $instance );
		echo "</pre>";
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"> <?php esc_html_e( 'Title', 'restaurant-site' ) ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
				name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>">Количество постов:</label>
			<input id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>"
				name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="text"
				value="<?php echo ( $posts_per_page ) ? esc_attr( $posts_per_page ) : '5'; ?>" size="3" />
		</p>
		<?php
	}


	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['posts_per_page'] = ( is_numeric( $new_instance['posts_per_page'] ) ) ? $new_instance['posts_per_page'] : '5'; // по умолчанию выводятся 5 постов

		return $instance;

	}
}