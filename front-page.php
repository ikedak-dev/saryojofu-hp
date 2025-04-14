<?php

$latest_args = array(
  'posts_per_page' => 1, // 1件のみ取得
  'post_type'      => 'post', // 投稿タイプが 'post' の場合
  'orderby'        => 'date', // 日付順に並べ替え
  'order'          => 'DESC', // 最新の記事から表示
);
$latest_query = new WP_Query($latest_args);

$args = [
  'post_type' => 'post',
  'posts_per_page' => 5,
];
$query = new WP_Query($args);
?>

<?php get_header(); ?>
<main class="l-main">
  <section class="l-main__kv p-kv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/kv.jpg')">
    <div class="p-kv__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="京都茶寮上符のロゴ" />
    </div>
    <div class="p-kv__news">
      <span class="c-news-tag">NEWS</span>
      <?php
      if ($latest_query->have_posts()) :
        while ($latest_query->have_posts()) : $latest_query->the_post();
      ?>
          <span class="c-date"><?php the_time(get_option('date_format')); ?></span>
          <a class="c-news-text c-hover" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
        <?php
        endwhile;
      else :
        ?>
        <span class="c-news-text">記事はありません。</span>
        <?php
      endif;
      wp_reset_postdata();
        ?>?>

    </div>
  </section>
  <section class="l-main__about p-about">
    <div class="p-about__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-1.jpeg" alt="" class="gsap-about-img" />
    </div>
    <h1 class="p-about__leading c-h1 gsap-h1"><span>和の伝統と現代の</span><span class="u-mt-64px">感性をつなぐ場所</span></h1>
    <div class="p-about__card c-card gsap-about-card">
      <p class="p-about__desc c-desc c-card__desc">
        四季の彩りと日本の風情を大切にする当店は、
        創業以来、厳選された国産素材のみを使用し、伝統の技と現代の感性を融合させた和菓子づくりに取り組んでおります。
        季節ごとに変わる上生菓子や、看板商品の羊羹、どら焼きなど、
        一つひとつ丁寧に手作りしています。和菓子を通じて、日本の四季と文化を感じていただける空間と味わいをご提供することが、私たちの喜びです。
      </p>
      <a class="c-detail-btn c-card__btn u-ml-auto" href="<?php echo home_url('/about'); ?>">
        詳しく見る
        <svg width=" 8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M-0.000136375 2.02289L1.16885 0.855013L7.536 7.21996C7.63863 7.32195 7.72008 7.44323 7.77567 7.57682C7.83125 7.71041 7.85986 7.85367 7.85986 7.99836C7.85986 8.14306 7.83125 8.28632 7.77567 8.41991C7.72008 8.5535 7.63863 8.67478 7.536 8.77677L1.16885 15.145L0.000965118 13.9771L5.97699 8.00002L-0.000136375 2.02289Z"
            class="c-arrow" />
        </svg>
      </a>
    </div>
  </section>
  <section class="l-main__recommend p-recommend">
    <div class="p-recommend__leading c-leading">
      <span class="c-leading__ruby">Recommend</span>
      <h2 class="c-h2 c-leading__title">当店のおすすめ</h2>
    </div>
    <div class="p-recommend__products swiper">
      <div class="p-recommend__cardList swiper-wrapper">
        <?php get_template_part('parts/recommend-list') ?>
      </div>
    </div>
  </section>
  <section class="l-main__menu">
    <div class="p-menu">
      <div class="p-menu__leading c-leading-card">
        <div class="c-leading-card__img c-bg-img gsap-leading-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Strawberry-Daifuku.jpg')"></div>
        <div class="c-leading-card__content c-leading gsap-leading-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/geometry_pink.jpg')">
          <span class="c-leading__ruby">Menu</span>
          <h2 class="c-leading__title">商品紹介</h2>
          <p class="c-leading__desc c-desc gsap-leading-desc">
            古くから受け継がれる和菓子の伝統を守りながらも、新たな風を取り入れる茶寮上符。創業以来、私たちは日本の四季と自然の美しさを和菓子に表現することを使命としてきました。
            厳選された国産素材と職人の繊細な技が調和し、ひとつひとつの和菓子には物語が宿ります。代々受け継がれてきた製法を大切にしながら、現代の感性で再解釈した茶寮上符の和菓子は、目で楽しみ、香りで感じ、口に含んだ瞬間に広がる豊かな風味で、五感すべてを満たす体験をお届けします。
          </p>
        </div>
      </div>
      <div class="p-menu__list gsap-menu-tl">
        <?php get_template_part('parts/category-list') ?>
      </div>
    </div>
  </section>
  <section class="l-main__gallary">
    <div class="swiper-gallary">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img class="c-gallary-img" src="<?php echo get_template_directory_uri(); ?>/images/Daifuku.jpeg" /></div>
        <div class="swiper-slide"><img class="c-gallary-img" src="<?php echo get_template_directory_uri(); ?>/images/Gold-Candy.jpeg" /></div>
        <div class="swiper-slide"><img class="c-gallary-img" src="<?php echo get_template_directory_uri(); ?>/images/Nerikashi.jpeg" /></div>
        <div class="swiper-slide"><img class="c-gallary-img" src="<?php echo get_template_directory_uri(); ?>/images/Kusamochi.jpeg" /></div>
        <div class="swiper-slide"><img class="c-gallary-img" src="<?php echo get_template_directory_uri(); ?>/images/Castella.jpeg" /></div>
        <div class="swiper-slide"><img class="c-gallary-img" src="<?php echo get_template_directory_uri(); ?>/images/Chestnut-Manju.jpg" /></div>
        <div class="swiper-slide"><img class="c-gallary-img" src="<?php echo get_template_directory_uri(); ?>/images/Strawberry-Daifuku.jpg" /></div>
        <div class="swiper-slide"><img class="c-gallary-img" src="<?php echo get_template_directory_uri(); ?>/images/Imagawayaki.jpeg" /></div>
      </div>
    </div>
  </section>
  <section class="l-main__feature">
    <div class="p-feature c-feature-card">
      <div class="p-feature__img c-feature-card__img">
        <img class="c-feature-img" src="<?php echo get_template_directory_uri(); ?>/images/Wagashi.jpeg" alt="和菓子の写真" />
      </div>
      <div class="p-feature__content">
        <div class="c-leading">
          <span class="c-leading__ruby">Passion</span>
          <h2 class="c-h2 c-leading__title c-leading__title--left-line">茶寮上符のこだわり</h2>
        </div>
        <p class="c-desc">
          茶寮上符の和菓子は、厳選された素材と匠の技が織りなす芸術品です。職人たちは、和菓子の形や色、味のバランスに細心の注意を払い、ひとつひとつ丹精込めて作り上げます。特に四季折々の素材を用いた季節菓子は、見た目の美しさだけでなく、口に広がる風味豊かな味わいで多くのお客様を魅了しています。
        </p>
        <a class="c-detail-btn c-card__btn u-ml-auto" href="<?php echo home_url('/passion'); ?>">
          詳しく見る
          <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M-0.000136375 2.02289L1.16885 0.855013L7.536 7.21996C7.63863 7.32195 7.72008 7.44323 7.77567 7.57682C7.83125 7.71041 7.85986 7.85367 7.85986 7.99836C7.85986 8.14306 7.83125 8.28632 7.77567 8.41991C7.72008 8.5535 7.63863 8.67478 7.536 8.77677L1.16885 15.145L0.000965118 13.9771L5.97699 8.00002L-0.000136375 2.02289Z"
              class="c-arrow" />
          </svg>
        </a>
      </div>
    </div>
    <div class="p-feature c-feature-card js-feature">
      <div class="p-feature__img c-feature-card__img">
        <img class="c-feature-img" src="<?php echo get_template_directory_uri(); ?>/images/Noren.jpeg" alt="茶寮上符の入口の写真" />
      </div>
      <div class="p-feature__content p-feature__content--vision">
        <div class="c-leading c-leading--right-aligned js-feature-title">
          <span class="c-leading__ruby">Vision</span>
          <h2 class="c-h2 c-leading__title c-leading__title--right-line">茶寮上符の想い</h2>
        </div>
        <p class="c-desc">
          茶寮上符は「季節を映し、人の心を結ぶ」という理念のもと、日本の四季と文化を和菓子に表現しています。厳選された地元素材と伝統技法を守りながらも、革新的な「三段仕込み製法」で独自の味わいを追求。私たちは和菓子を通じて、皆様に季節の移ろいを感じていただき、心豊かなひとときをお届けします。
        </p>
        <a class="c-detail-btn c-card__btn u-ml-auto" href="<?php echo home_url('/vision'); ?>">
          詳しく見る
          <svg width=" 8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M-0.000136375 2.02289L1.16885 0.855013L7.536 7.21996C7.63863 7.32195 7.72008 7.44323 7.77567 7.57682C7.83125 7.71041 7.85986 7.85367 7.85986 7.99836C7.85986 8.14306 7.83125 8.28632 7.77567 8.41991C7.72008 8.5535 7.63863 8.67478 7.536 8.77677L1.16885 15.145L0.000965118 13.9771L5.97699 8.00002L-0.000136375 2.02289Z"
              class="c-arrow" />
          </svg>
        </a>
      </div>
    </div>
  </section>
  <section class="l-main__news p-news">
    <div class="p-news__leading c-leading">
      <span class="c-leading__ruby">News</span>
      <h2 class="c-h2 c-leading__title">お知らせ</h2>
    </div>
    <div class="p-news__list">
      <ul class="c-news-list">
        <?php if ($query->have_posts()) : ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li class="c-news-item"><span class="c-date"><?php the_time(get_option('date_format')); ?></span> <a href="<?php echo get_permalink(); ?>" class="c-news-text"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        <?php else : ?>
          <span class="c-news-text">記事はありません。</span>
        <?php endif; ?>
      </ul>
    </div>
  </section>
  <section class="l-main__info" id="info">
    <div class="p-info">
      <div class="p-info__leading c-leading">
        <span class="c-leading__ruby">Infomation</span>
        <h2 class="c-h2 c-leading__title">店舗情報</h2>
      </div>
      <div class="p-info__content c-info">
        <div class="c-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12957.862677789295!2d139.78635638952247!3d35.714764459194285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ec1a4463df1%3A0x6c0d289a8292810d!2z5rWF6I2J5a-6!5e0!3m2!1sja!2sjp!4v1743987795403!5m2!1sja!2sjp"
            class="c-map-img"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <table class="c-info-table">
          <tbody class="c-info-table__body">
            <tr class="c-info-table__row">
              <td class="c-info-table__cell c-info-table__cell--title">住所</td>
              <td class="c-info-table__cell">〒600-8031 <br />京都府京都市下京区上符町123</td>
            </tr>
            <tr class="c-info-table__row">
              <td class="c-info-table__cell c-info-table__cell--title">営業時間</td>
              <td class="c-info-table__cell">平日: 10:00 ～ 18:00 <br />土日祝: 9:00 ～ 19:00 <br />定休日: 毎週水曜日</td>
            </tr>
            <tr class="c-info-table__row">
              <td class="c-info-table__cell c-info-table__cell--title">アクセス</td>
              <td class="c-info-table__cell">JR京都駅から徒歩15分 <br />阪急京都河原町駅から徒歩8分</td>
            </tr>
            <tr class="c-info-table__row">
              <td class="c-info-table__cell c-info-table__cell--title">駐車場</td>
              <td class="c-info-table__cell">
                店舗近隣に専用駐車場あり（5台分） <br />提携駐車場もご利用可能（駐車券をお持ちいただければ2時間無料）
              </td>
            </tr>
            <tr class="c-info-table__row">
              <td class="c-info-table__cell c-info-table__cell--title">お問い合わせ</td>
              <td class="c-info-table__cell">電話番号 <br />075-123-4567 <br />メール <br />info@saryo-kamifu.jp</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
</body>

</html>