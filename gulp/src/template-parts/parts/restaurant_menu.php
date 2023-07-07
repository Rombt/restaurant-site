 <?php global $restaurant_site_options;?>
<?php

$params = [
    'post_type' => 'food-menu-items',
    'posts_per_page' => 8,
];
$query_Menu_items = new WP_Query($params);

?>

<div class="conteiner" id="restaurant-menu">
   <?php get_template_part('template-parts/components/food_menu', null, ['title' => esc_html($restaurant_site_options['restaurant_menu-section_title'])]);?>
   <section class="row-dish-menu dish-menu__row">
      <?php if ($query_Menu_items->have_posts()) {
    while ($query_Menu_items->have_posts()) {
        $query_Menu_items->the_post();
        ?>
               <article <?php post_class('dish-menu');?> id="post-<?php the_id()?>" data-post-id="<?php the_id()?>">
                  <a href="<?php echo esc_url(the_permalink()); ?>">
                     <div class="dish-menu__title">
                        <?php echo the_title() ?>
                        <p><?php echo rstr_trim_excerpt(12) ?></p>
                     </div>
                     <?php

        echo "<pre>";
        print_r(get_field('food-menu-items_show-in-front-page'));
        echo "</pre>";

        // !!todo добавить проверку на существования плагина ACF
        get_template_part('template-parts/components/price', null, ['price' => get_field('food_price')]); ?>
                  </a>
               </article>
         <?php
}
    wp_reset_postdata();
} else {
    // something
}
?>

   </section>
   <!-- @@include('./parts/button-orange.html',{'mod':'','title':'Explor food menu', 'href':'#'}) -->

   <div class="wrap-img wrap-img__311x311">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_1']['url']) {?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_1']['url']) ?>" alt="">
      <?php }?>
   </div>
   <div class="wrap-img wrap-img__267x414">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_2']['url']) {?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_2']['url']) ?>" alt="">
      <?php }?>
   </div>
   <div class="wrap-img wrap-img__241x241">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_3']['url']) {?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_3']['url']) ?>" alt="">
      <?php }?>
   </div>

</div>