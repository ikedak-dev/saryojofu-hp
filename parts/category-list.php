<?php
$a_class = is_front_page()
    ? 'gsap-menu-card'
    : 'swiper-slide swiper-slide--menu';

$categories = get_categories();
foreach ($categories as $category) { ?>
    <a class="c-menu-card <?php echo $a_class; ?>" href="<?php echo get_category_link($category->term_id); ?>">
        <div class="c-menu-card__img c-bg-img" style="background-image: url('<?php echo get_field('cat_img', $category); ?>')"></div>
        <div class="c-menu-card__content c-menu-content">
            <h3 class="c-menu-content__title c-menu-content__title--<?php echo get_field('slug', $category); ?> c-h3"><?php echo  $category->name; ?></h3>
            <p class="c-menu-content__desc c-desc">
                <?php echo get_field('cat_description', $category); ?>
        </div>
    </a>
<?php } ?>
<?php wp_reset_postdata(); ?>