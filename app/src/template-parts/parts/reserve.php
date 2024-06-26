<?php global $restaurant_site_options; ?>

<div class="rstr-container" id="reserve">
	<h2>
		<?php class_exists('ReduxFramework') ? _e($restaurant_site_options['reserve-section_title']) : "" ?>
	</h2>
	<section class="reserve-row">
		<div class="wrap-img reserve-row__img">
			<img src="<?php echo rstr_get_pic_url('reserve-section_background_img') ?>" alt="">
		</div>
		<div class="reserve-row__form">
			<form action="#" name="reserve-form" class="reserve-form">
				<div class="reserve-form__input">
					<p>Name*</p>
					<input type="text" tabindex="1" name="name" value="">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#user_name">
						</use>
					</svg>
				</div>
				<div class="reserve-form__input">
					<p>Time*</p><input type="text" tabindex="2" name="time" value="">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#time">
						</use>
					</svg>
				</div>
				<div class="reserve-form__input">
					<p>Guests*</p><input type="text" tabindex="3" name="guests" value="">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#guests">
						</use>
					</svg>
				</div>
				<div class="reserve-form__input">
					<p>Date*</p><input type="text" tabindex="4" name="date" value="">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#date">
						</use>
					</svg>
				</div>
				<div class="reserve-form__input">
					<p>Email Address*</p><input type="email" tabindex="5" name="email-address" value="">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#email">
						</use>
					</svg>
				</div>
				<div class="reserve-form__input">
					<p>Phone Number*</p><input type="tel" tabindex="6" name="phone-number" value="">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_number">
						</use>
					</svg>
				</div>
			</form>
			<div class="reserve-call-us">
				<?php get_template_part(
					'template-parts/components/button',
					'orange',
					[
						'href' => class_exists('ReduxFramework') ? esc_html($restaurant_site_options['reserve-section_button-href']) : "",
						'title' => class_exists('ReduxFramework') ? esc_html($restaurant_site_options['reserve-section_button-title']) : "",
					]
				); ?>
				<p>
					<?php class_exists('ReduxFramework') ? _e($restaurant_site_options['reserve-section_text']) : "" ?>
				</p>
				<?php if (class_exists('ReduxFramework') && $restaurant_site_options['phone-numbers_reservation']) { ?>
					<span class="reserve-call-us__tel">
						<a href="tel:<?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['phone-numbers_reservation']) : "" ?>">
							<?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['phone-numbers_reservation']) : "" ?>
						</a>
					</span>
				<?php } ?>
			</div>
		</div>
	</section>
</div>