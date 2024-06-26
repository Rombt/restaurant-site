<?php
/* Template Name: shop-details */
?>


<?php get_header(); ?>
<?php get_template_part('template-parts/parts/head_pages'); ?>

<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

<main class="rstr-container shop-details-container">
   <div class="shop-details-row">
      <div class="shop-details-img">
         <div class="shop-details-img__details-img wrap-img">
            <img src="@img/Image_370x370.jpg" alt="shop details img">
         </div>
         <div class="shop-details-img__zoom wrap-img">
            <img src="@img/icon_zoom.png" alt="zoom icon">
         </div>
      </div>
      <article class="shop-details">
         <header class="shop-details__header">
            <h2>Green mung beans</h2>
            @@include('html/parts/rating-box.html',{'quantity':'3'})
            <div class="shop-details__reviews">( 03 Reviews )</div>
         </header>
         <div class="shop-details__body">
            <div class="shop-details__price">
               <span>$150</span><span>$100</span>
            </div>
            <div class="shop-details__text">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil exercitationem quidem quas sequi
               dignissimos quaerat modi illum facere ipsa. Enim facere qui eius facilis cupiditate magni consequatur
               debitis? Quod, consequuntur?
            </div>
         </div>
         <footer class="shop-details__footer">
            <div class="quantity-goods">
               <div class="quantity-goods__plus">-</div>
               <div class="quantity-goods__quantity">01</div>
               <div class="quantity-goods__mines">+</div>
            </div>
            @@include('html/parts/button-orange.html',{'mod':'button-orange_light','title':'add to cart'})
            @@include('html/parts/button-orange.html',{'mod':'','title':'buy now'})
         </footer>
      </article>
   </div>
</main>
<div class="background description-background">
   <div class="description container">
      <div class="description__row">
         <div class="description__title">
            <span>Description</span> <span>Reviews (03)</span>
         </div>
         <div class="description__text">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, est ea quia consectetur dolorem,
            odit corporis delectus facilis sunt sequi culpa sit suscipit ab, adipisci iure tempore perspiciatis
            dicta. Modi.
            Laboriosam, velit saepe voluptate itaque corrupti nostrum a assumenda natus excepturi possimus quisquam
            perferendis molestiae quam eveniet error reprehenderit incidunt, cupiditate doloremque? Molestiae
            suscipit omnis eius harum, maxime temporibus autem?
            Dolore ratione delectus totam veniam ea enim a voluptatibus saepe repudiandae, neque modi deleniti quod
            perspiciatis. Delectus magnam aspernatur sequi fugiat officiis tenetur! Neque at quas iure eius, labore
            cupiditate.
         </div>
         <div class="description__footer">
            <p>Duis vitae orci in urna commodo mollis.</p>
            <p>Ut sit amet sem ut duiUt sit amet sem ut duiamet sem ut dui</p>
            <p>Ut sit amet sem ut duiUt sit amet sem ut duiamet sem ut dui</p>
         </div>
      </div>
   </div>
</div>
@@include('html/parts/related-products.html',{'@@background':''})


<?php get_footer(); ?>