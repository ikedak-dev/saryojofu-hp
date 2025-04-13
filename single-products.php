<?php get_header(); ?>
    <main class="l-main">
      <section class="l-main__product p-product" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/geometry_beige.jpg')">
        <div class="p-product__img c-bg-img" style="background-image: url('<?php the_field('product_img'); ?>')"></div>
        <div class="p-product__content c-leading">
          <div class="p-product-info">
            <h2 class="p-product-info__name c-h2 c-h2--same c-name"><?php the_title() ?></h2>
            <span class="p-product-info__price c-price"><?php the_field('price'); ?></span>
            <span class="p-product-info__tax c-tax">(税込)</span>
          </div>
          <p class="c-desc"><?php the_field('description'); ?></p>
        </div>
      </section>
      <section class="l-main__recommend p-recommend">
        <div class="p-recommend__leading c-leading">
          <h2 class="c-h2 c-leading__title">おすすめの商品</h2>
        </div>
        <div class="p-recommend__products swiper">
          <div class="p-recommend__cardList swiper-wrapper">
          <?php get_template_part('parts/recommend-list') ?>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
  </body>
</html>
