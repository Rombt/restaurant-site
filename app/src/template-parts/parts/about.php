<div class="conteiner" id="about">
    <?php global $restaurant_site_options; ?>

    <nav class="about-row__top-menu">
        <a href="#" class="read">
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['read_revie_button']['url']) { ?>
                <img class='read__cercle'  src="<?php echo esc_url($restaurant_site_options['read_revie_button']['url']) ?>" alt="">
            <?php }?>

            <div>
                <?php class_exists('ReduxFramework') ? _e($restaurant_site_options['read_revie_text']) : '' ?>
            </div>
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['read_revie_icon']['url']) { ?>
                <img class='read__icon' src="<?php echo esc_url($restaurant_site_options['read_revie_icon']['url']) ?>" alt="">
            <?php }?>
        </a>

        <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['phone-numbers_home-delivery']) {   ?>
        <a href="tel: <?php class_exists('ReduxFramework') ? esc_html_e($restaurant_site_options['phone-numbers_home-delivery']) : "" ?> " class="about-call-us">
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['home_delivery_icon']['url']) { ?>
                <img class='read__cercle' src="<?php echo esc_url($restaurant_site_options['home_delivery_icon']['url']) ?>" alt="">
            <?php }?>

            <div class="about-call-us__text">
                <?php class_exists('ReduxFramework') ? _e($restaurant_site_options['home_delivery_text']) : '' ?>
            </div>
            <div class="phone-number">
                <?php class_exists('ReduxFramework') ? esc_html_e($restaurant_site_options['phone-numbers_home-delivery']) : '' ; ?>
            </div>
        </a>
        <?php }?>



    </nav>
    <section class="about-row">
        <div class="about-row__text">
            <h2>
                <?php class_exists('ReduxFramework') ? esc_html_e($restaurant_site_options['about_section_title']) : ''; ?>
            </h2>
            <p>
                <?php echo rstr_trim_excerpt(50, class_exists('ReduxFramework') ? esc_html__($restaurant_site_options['about_section_text']) : ''); ?>
            </p>
            <div class="about-row__text-buttons">
                <?php get_template_part('template-parts/components/button', 'orange', ['href'=>'#','title'=>'READ MORE']); ?>
                <div class="wrap-img">
                    <img src="img/about-button-bg.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="about-row__img">
            <div class="wrap-img about-row__wrap-img">
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['about_section_img_1']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['about_section_img_1']['url']) ?>" alt="about section img">
            <?php }?>
            </div>
            <div class="wrap-img about-row__wrap-img">
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['about_section_img_2']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['about_section_img_2']['url']) ?>" alt="about section img">
            <?php }?>
            </div>
            <div class="wrap-img about-row__wrap-img">
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['about_section_img_3']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['about_section_img_3']['url']) ?>" alt="about section img">
            <?php }?>
            </div>
            <div class="wrap-img about-row__wrap-img">
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['about_section_img_4']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['about_section_img_4']['url']) ?>" alt="about section img">
            <?php }?>
            </div>
        </div>
    </section>
</div>