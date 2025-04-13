<?php get_header(); ?>
<main class="l-main">
  <section class="l-main__kv p-kv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Noren.jpeg')">
    <div class="p-kv__title c-leading">
      <span class="c-leading__ruby"><?php echo ucfirst($post->post_name); ?></span>
      <h2 class="c-h2 c-leading__title"><?php the_title() ?></h2>
    </div>
  </section>
  <section class="l-main__introduction">
    <div class="p-introduction">
      <div class="p-introduction__leading c-leading-card">
        <div class="c-leading-card__img c-bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Gift.jpeg')"></div>
        <div class="c-leading-card__content c-leading" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/geometry_orange.jpg')">
          <h2 class="c-leading__title">「季節を映す、心を結ぶ」</h2>
          <p class="c-leading__desc c-desc">
            茶寮上符では、和菓子は単なる食べ物ではなく、日本の四季と文化を表現する媒体であると考えています。私たちの和菓子づくりは「季節を映し、人の心を結ぶ」という哲学に基づいています。
            <br />
            自然の移ろいを和菓子に表現することで、忙しい現代社会でも四季の変化を感じ、味わう喜びをお届けしたい。また、和菓子を介して人と人とが心を通わせる瞬間を大切にし、お茶会や贈り物を通じて人々の絆を深める一助となることを願っています。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="l-main__feature-list ">
    <h2 class="c-h2 c-h2--center">茶寮上符の理念とビジョン</h2>
    <div class="c-feacture-list-card gsap-feature-list">
      <div class="c-feacture-list-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-7.jpeg" alt="" class="c-img" /></div>
      <div class="c-feacture-list-card__content ">
        <h3 class="c-h3 c-text-side-line ">季節を映す、感動を創る</h3>
        <p class="c-desc">
          四季折々の自然の美しさと移ろいを和菓子に表現することで、日本の季節感を大切にします。素材の選定から仕上げまで、季節の特徴を活かした和菓子づくりを追求し、一つひとつの和菓子に季節の物語を込めています。お客様に和菓子を通じて季節の訪れを感じていただき、日々の生活に小さな感動をお届けします。
        </p>
      </div>
    </div>
    <div class="c-feacture-list-card gsap-feature-list">
      <div class="c-feacture-list-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-5.jpeg" alt="" class="c-img" /></div>
      <div class="c-feacture-list-card__content">
        <h3 class="c-h3 c-text-side-line">伝統を守り、革新を育む</h3>
        <p class="c-desc">
          創業以来受け継がれてきた伝統技法を大切に守りながらも、時代に合わせた新しい発想を取り入れています。古来の製法と現代の技術を融合させることで、伝統の味わいに新たな魅力を加えた和菓子を創作。伝統と革新のバランスを大切にし、和菓子文化の未来を切り拓いていきます。
        </p>
      </div>
    </div>
    <div class="c-feacture-list-card gsap-feature-list">
      <div class="c-feacture-list-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-3.jpeg" alt="" /></div>
      <div class="c-feacture-list-card__content">
        <h3 class="c-h3 c-text-side-line">人と人をつなぐ、心の架け橋</h3>
        <p class="c-desc">
          和菓子は贈り物や茶会など、人と人とが心を通わせる場面で親しまれてきました。茶寮上符は和菓子を通じて、人々の絆を深める「心の架け橋」になることを目指しています。地域の皆様との交流を大切にし、和菓子づくりを通じて地域社会に貢献するとともに、和菓子の文化を次世代へと伝えていきます。
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
  </section>
</main>
<?php get_footer(); ?>
</body>

</html>