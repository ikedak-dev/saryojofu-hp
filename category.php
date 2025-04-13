<?php
$category = get_queried_object();
$slug = $category->slug;
$name = $category->name;
?>
<?php get_header(); ?>
<main class="l-main">
  <section class="l-main__kv p-kv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/kv.jpg')">
    <div class="p-kv__title c-leading">
      <h2 class="c-h2 c-leading__title"><?php echo $name; ?></h2>
    </div>
  </section>
  <section class="l-main__introduction">
    <div class="p-introduction">
      <div class="p-introduction__leading c-leading-card">
        <div class="c-leading-card__img c-bg-img" style="background-image: url('<?php echo get_field('cat_img', $category); ?>"></div>
        <div class="c-leading-card__content c-leading" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/geometry_beige.jpg')">
          <h2 class="c-leading__title"><?php echo get_field('cat_leading', $category); ?></h2>
          <p class="c-leading__desc c-desc">
            <?php echo get_field('cat_description', $category); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="l-main__menu-list p-menu-list">
    <?php get_template_part('parts/product-list') ?>
  
   
  </section>
  <section class="l-main__menu p-menu">
    <div class="p-menu__leading p-menu__leading--center c-leading">
      <span class="c-leading__ruby">Menu</span>
      <h2 class="c-h2 c-leading__title">商品紹介</h2>
    </div>
    <div class="p-menu__products swiper">
      <div class="p-menu__cardList swiper-wrapper">
        <?php get_template_part('parts/category-list') ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
</body>

</html>