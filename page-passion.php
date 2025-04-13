<?php get_header(); ?>
    <main class="l-main">
      <section class="l-main__kv p-kv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Noren.jpeg')">
        <div class="p-kv__title c-leading">
          <span class="c-leading__ruby"><?php echo ucfirst($post->post_name);?></span>
          <h2 class="c-h2 c-leading__title"><?php the_title()?></h2>
        </div>
      </section>
      <section class="l-main__introduction">
        <div class="p-introduction">
          <div class="p-introduction__leading c-leading-card">
            <div class="c-leading-card__img c-bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Gift.jpeg')"></div>
            <div class="c-leading-card__content c-leading" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/geometry_orange.jpg')">
              <h2 class="c-leading__title">「季節を映す、心を結ぶ」</h2>
              <p class="c-leading__desc c-desc">
              茶寮上符の和菓子は、厳選された素材と匠の技が織りなす芸術品です。職人たちは、和菓子の形や色、味のバランスに細心の注意を払い、ひとつひとつ丹精込めて作り上げます。
              特に四季折々の素材を用いた季節菓子は、見た目の美しさだけでなく、口に広がる風味豊かな味わいで多くのお客様を魅了しています。
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="l-main__feature-list ">
        <h2 class="c-h2 c-h2--center">心を込めた和菓子づくり</h2>
        <div class="c-feacture-list-card gsap-feature-list">
          <div class="c-feacture-list-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-7.jpeg" alt="" class="c-img" /></div>
          <div class="c-feacture-list-card__content ">
            <h3 class="c-h3 c-text-side-line ">素材へのこだわり</h3>
            <p class="c-desc">
            全国から選りすぐった最高級の素材だけを使用し、その素材が持つ本来の風味を最大限に活かします。契約農家から直接仕入れる旬の果実や、希少な国産小豆など、素材の鮮度と品質にこだわり抜いた原料選びが、茶寮上符の和菓子の基盤となっています。
            </p>
          </div>
        </div>
        <div class="c-feacture-list-card gsap-feature-list">
          <div class="c-feacture-list-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-5.jpeg" alt="" class="c-img" /></div>
          <div class="c-feacture-list-card__content">
            <h3 class="c-h3 c-text-side-line">技術へのこだわり</h3>
            <p class="c-desc">
            代々受け継がれてきた伝統技法と、茶寮上符独自の「三段仕込み製法」により、なめらかな舌触りと深みのある味わいを実現しています。職人の繊細な手技によって生まれる美しい意匠は、和菓子を単なる菓子から芸術作品へと昇華させます。
            </p>
          </div>
        </div>
        <div class="c-feacture-list-card gsap-feature-list">
          <div class="c-feacture-list-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-3.jpeg" alt="" /></div>
          <div class="c-feacture-list-card__content">
            <h3 class="c-h3 c-text-side-line">季節へのこだわり</h3>
            <p class="c-desc">
            日本の四季折々の風物詩や季節感を和菓子に表現することで、忙しい現代においても季節の移ろいを感じていただける和菓子づくりを心がけています。春夏秋冬、それぞれの季節に最も美しく、最も美味しい和菓子をお届けします。
            </p>
          </div>
        </div>
      </section>
      <section class="l-main__feature u-mb-100">
        <div class="p-feature c-feature-card">
          <div class="p-feature__img c-feature-card__img">
            <img class="c-feature-img" src="<?php echo get_template_directory_uri(); ?>/images/Wagashi.jpeg" alt="和菓子の写真" class="c-img" />
          </div>
          <div class="p-feature__content">
            <div class="c-leading">
              <span class="c-leading__ruby">Passion</span>
              <h2 class="c-h2 c-leading__title c-leading__title--left-line">茶寮上符のこだわり</h2>
            </div>
            <p class="c-desc">
              茶寮上符の和菓子は、厳選された素材と匠の技が織りなす芸術品です。職人たちは、和菓子の形や色、味のバランスに細心の注意を払い、ひとつひとつ丹精込めて作り上げます。特に四季折々の素材を用いた季節菓子は、見た目の美しさだけでなく、口に広がる風味豊かな味わいで多くのお客様を魅了しています。
            </p>
            <a class="c-detail-btn c-card__btn u-ml-auto" href="<?php echo home_url('/vision'); ?>">
              詳しく見る
              <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M-0.000136375 2.02289L1.16885 0.855013L7.536 7.21996C7.63863 7.32195 7.72008 7.44323 7.77567 7.57682C7.83125 7.71041 7.85986 7.85367 7.85986 7.99836C7.85986 8.14306 7.83125 8.28632 7.77567 8.41991C7.72008 8.5535 7.63863 8.67478 7.536 8.77677L1.16885 15.145L0.000965118 13.9771L5.97699 8.00002L-0.000136375 2.02289Z"
                  class="c-arrow"
                />
              </svg>
            </a>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
  </body>
</html>
