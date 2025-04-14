<?php
$args = array(
    'post_type' => 'products',
    'posts_per_page' => 6,
    'category_name' => 'recommend',
);
$recommend_query = new WP_Query($args);
if ($recommend_query->have_posts()) {
    while ($recommend_query->have_posts()) : $recommend_query->the_post();
        $postID = $recommend_query->post->ID;
?>
        <div class="swiper-slide c-product-card">
            <div class="c-product-card__img"><img class="c-product-img" src="<?php echo get_field('product_img', $postID); ?>" alt="抹茶ラテの商品画像" /></div>
            <h3 class="c-h3 c-product-card__name"><?php the_title(); ?></h3>
            <p class="c-product-card__desc c-desc">
                <?php echo get_field('description', $postID); ?>
            </p>
            <a class="c-detail-btn c-card__btn" href="<?php echo get_permalink(); ?>">
                詳しく見る
                <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-0.000136375 2.02289L1.16885 0.855013L7.536 7.21996C7.63863 7.32195 7.72008 7.44323 7.77567 7.57682C7.83125 7.71041 7.85986 7.85367 7.85986 7.99836C7.85986 8.14306 7.83125 8.28632 7.77567 8.41991C7.72008 8.5535 7.63863 8.67478 7.536 8.77677L1.16885 15.145L0.000965118 13.9771L5.97699 8.00002L-0.000136375 2.02289Z"
                        class="c-arrow" />
                </svg>
            </a>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
<?php } ?>