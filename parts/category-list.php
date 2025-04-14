<?php
$a_class = is_front_page()
    ? 'gsap-menu-card'
    : 'swiper-slide swiper-slide--menu';

$custom_order_slugs = array('limited-time-menu', 'hoshigashi', 'yakigashi', 'nerigashi', 'mochigashi', 'gift');

foreach ($custom_order_slugs as $slug) {
    $category = get_category_by_slug($slug);
    if (!$category) continue; 
    ?>
    <a class="c-menu-card <?php echo esc_attr($a_class); ?>" href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
        <div class="c-menu-card__img c-bg-img" style="background-image: url('<?php echo esc_url(get_field('cat_img', $category)); ?>')"></div>
        <div class="c-menu-card__content c-menu-content">
            <h3 class="c-menu-content__title c-menu-content__title--<?php echo esc_attr(get_field('slug', $category)); ?> c-h3">
                <?php echo esc_html($category->name); ?>
            </h3>
            <p class="c-menu-content__desc c-desc">
                <?php echo esc_html(get_field('cat_description', $category)); ?>
            </p>
        </div>
    </a>
<?php } ?>
<?php wp_reset_postdata(); ?>