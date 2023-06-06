<?php
/* Template Name: About us */
?>


<?php get_header(); ?>


<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

<main>
   <section class="conteiner history-blok">
      <div class="history-blok__row">
         <div class="history-blok__title">
            <h2>Our History</h2>
         </div>
         <div class="history-blok__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quam! Dolor dolores veniam natus
            doloribus
            ducimus doloremque iure odio dolore a quod! Qui aliquam cumque voluptatum accusamus ipsam numquam
            repudiandae dicta, ad est iste sit tempore debitis laboriosam exercitationem porro perspiciatis adipisci
         </div>
         <div class="video-blok-history">
            <figure class="wrap-video wrap-img">
               <!-- Вставляем видео при помощи тега video -->
               <!-- <video src="video.mp4" controls></video> -->
               <img src="@img/video-blok-history-img.jpg" alt="video blok history">
            </figure>
            <div class="video-blok-history__description">
               Our hotel video
            </div>
         </div>
      </div>
   </section>
   <div class="background background-cooks">
      <div class="wrap-img background-cooks__img">
         <img src="@img/background-cooks.jpg" alt="background cooks">
      </div>
      <section class="conteiner cooks">
         <h2 class="cooks__title"> Our Cooks </h2>
         <div class="swiper swiper-cooks">
            <!-- Slider main container -->
            <div class="swiper-wrapper">
               <!-- Additional required wrapper -->
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. John cliff</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. peter vasko</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. Mariya thomas</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
            </div>
            <div class="swiper-pagination swiper-cooks__pagination"></div>
         </div>
      </section>
   </div>
</main>

<?php get_template_part( 'template-parts/parts/speciality_block','white'); ?>
<?php get_template_part( 'template-parts/components/opening-hours'); ?>

<?php get_footer();?>