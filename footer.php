<div class="background background__footer">
	<?php global $restaurant_site_options; ?>
	<div class="footer conteiner">
		<section class="footer__row">
			<div class="footer__navigation">
				<?php echo $restaurant_site_options['title_one'] ? '<h2>' . esc_html($restaurant_site_options['title_one']) . '</h2>' : '' ?>
				<?php wp_nav_menu(
					array(
						'theme_location' => 'footer_nav',
						'container' => false,
					)
				); ?>
			</div>
			<div class="footer__news">
				<?php echo $restaurant_site_options['title_two'] ? '<h2>' . esc_html($restaurant_site_options['title_two']) . '</h2>' : '' ?>
				<span>Enter your email address and subscribe daily newsletter</span>
				<div class="form-footer">
					<div class="form-footer__input">
						<picture><source srcset="img/form-icon_email.webp" type="image/webp"><img src="img/form-icon_email.png" alt=""></picture>
						<p>Email Address</p>
						<input type="email">
					</div>
					<a href="#" class="button-orange ">Subscribe</a>
				</div>
				<div class="icons-block">
   <?php if ($restaurant_site_options['social_networks_fb-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_fb-link']) ?>">
      <?php if ($restaurant_site_options['fb-link_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['fb-link_icon']['url']) ?>" alt="icon_facebook">
      <?php }?>
   </a>
   <?php }?>

   <?php if ($restaurant_site_options['social_networks_instagram-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if ($restaurant_site_options['social_networks_twitt_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_twitt_icon']['url']) ?>"
         alt="icon_twitter">
      <?php }?>
   </a>
   <?php }?>

   <?php if ($restaurant_site_options['social_networks_twitt-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if ($restaurant_site_options['social_networks_instagram_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_instagram_icon']['url']) ?>"
         alt="icon_instagram">
      <?php }?>
   </a>
   <?php }?>




</div>
			</div>
			<div class="footer__app">
				<?php echo $restaurant_site_options['title_three'] ? '<h2>' . esc_html($restaurant_site_options['title_three']) . '</h2>' : '' ?>
				<a href="#" class="button-app">
   <picture><source srcset="img/icon_apple.webp" type="image/webp"><img src="img/icon_apple.png" alt=""></picture>
   <p>
      <span>Avilable&nbspon&nbspthe</span>
      App&nbspStore
   </p>
</a>
				<a href="#" class="button-app">
   <picture><source srcset="img/icon_google-play.webp" type="image/webp"><img src="img/icon_google-play.png" alt=""></picture>
   <p>
      <span>Get&nbspit&nbspon</span>
      Google&nbspPlay
   </p>
</a>
			</div>
		</section>
	</div>
	<div class="copyright-block">
		<span></span>
		<?php echo $restaurant_site_options['copyright'] ? '<p>' . wp_kses_post($restaurant_site_options['copyright']) . '</p>' : '<p>' . esc_html_e('2016 © Luxury RestaurAnt, All rights reserved') . '</p>' ?>
		<span></span>
	</div>
</div>



<?php wp_footer(); ?>
</body>

</html>