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
   <div class="background background-coocs">
      <div class="wrap-img background-coocs__img">
         <img src="@img/background-coocs.jpg" alt="background coocs">
      </div>
      <section class="conteiner coocs">
         <h2 class="coocs__title"> Our Cooks </h2>
         <div class="swiper swiper-coocs">
            <!-- Slider main container -->
            <div class="swiper-wrapper">
               <!-- Additional required wrapper -->
               <div class="swiper-slide swiper-coocs__card">
                  <div class="wrap-img swiper-coocs__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. John cliff</span>
               </div>
               <div class="swiper-slide swiper-coocs__card">
                  <div class="wrap-img swiper-coocs__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. peter vasko</span>
               </div>
               <div class="swiper-slide swiper-coocs__card">
                  <div class="wrap-img swiper-coocs__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. Mariya thomas</span>
               </div>
               <div class="swiper-slide swiper-coocs__card">
                  <div class="wrap-img swiper-coocs__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-coocs__card">
                  <div class="wrap-img swiper-coocs__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-coocs__card">
                  <div class="wrap-img swiper-coocs__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-coocs__card">
                  <div class="wrap-img swiper-coocs__img">
                     <img src="@img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
            </div>
            <div class="swiper-pagination swiper-coocs__pagination"></div>
         </div>
      </section>
   </div>
</main>
@@include('html/speciality-block.html',{'specifier':'speciality-block-coocs-page'})
@@include('html/parts/opening-hours.html',{})
@@include('html/footer.html',{})
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/app.min.js"></script>
</body>

</html>