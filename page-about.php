<?php get_header(); ?>
<main class="l-main">
  <section class="l-main__kv p-kv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/kv.jpg')">
    <div class="p-kv__title c-leading">
      <span class="c-leading__ruby"><?php echo ucfirst($post->post_name); ?></span>
      <h2 class="c-h2 c-leading__title"><?php the_title() ?></h2>
    </div>
  </section>
  <section class="l-main__introduction">
    <div class="p-introduction">
      <div class="p-introduction__leading c-leading-card">
        <div class="c-leading-card__img c-bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Wagashi.jpeg')"></div>
        <div class="c-leading-card__content c-leading" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/geometry_pink.jpg')">
          <h2 class="c-leading__title">「伝統と革新が織りなす至高の和菓子」</h2>
          <p class="c-leading__desc c-desc">
            古くから受け継がれ
            る和菓子の伝統を守りながらも、新たな風を取り入れる茶寮上符。創業以来、私たちは日本の四季と自然の美しさを和菓子に表現することを使命としてきました。
            厳選された国産素材と職人の繊細な技が調和し、ひとつひとつの和菓子には物語が宿ります。代々受け継がれてきた製法を大切にしながら、現代の感性で再解釈した茶寮上符の和菓子は、目で楽しみ、香りで感じ、口に含んだ瞬間に広がる豊かな風味で、五感すべてを満たす体験をお届けします。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="l-main__history">
    <div class="p-history">
      <h2 class="p-history__title c-h2 c-h2--center">茶寮上符の歩み</h2>
      <div class="p-history__content">
        <div class="p-era__item">
          <span class="p-era__label">1900s</span>
          <span class="p-era__line p-era__line--center"></span>
        </div>
        <div class="c-history-card">
          <div class="c-history-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-4.jpg" alt="創業時の写真" class="c-img" /></div>
          <div class="c-history-card__content">
            <span class="c-history-title">創業のはじまり</span>
            <p class="c-desc">
              茶寮上符は、1900年（明治33年）に京都の小さな町家で創業しました。当時の日本は明治維新を経て急速な西洋化が進む一方で、和の文化を守り伝える動きが強まりつつある時代でした。創業者の上符徳之助は、祖父の代から受け継がれる茶道の精神に深く感銘を受け、茶会にふさわしい菓子を作るために店を構えました。当初は地元の茶道家たちから注文を受ける形で、一日数種類の菓子を手作りしていました。
            </p>
          </div>
        </div>
        <div class="p-era p-era--left">
          <div class="p-era__item p-era__item--flex">
            <span class="p-era__label">1940s</span>
            <span class="p-era__line p-era__line--right"></span>
          </div>
        </div>
        <div class="c-history-card c-history-card--reverse">
          <div class="c-history-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/history_1.jpg" alt="1940年代の写真" class="c-img" /></div>
          <div class="c-history-card__content">
            <span class="c-history-title">戦争の影響</span>
            <p class="c-desc">
              昭和初期、戦争の影響で菓子作りに欠かせない砂糖や小豆といった材料が手に入りにくくなりました。しかし、二代目店主・上符一郎は「困難な時代だからこそ、心を癒す菓子を提供したい」との思いで営業を続けました。この時期、地域住民のために限られた材料で工夫を凝らし、素朴ながらも心温まる味わいの菓子を提供しました。
            </p>
          </div>
        </div>
        <div class="p-era p-era--right">
          <div class="p-era__item p-era__item--flex-reverse">
            <span class="p-era__label">1980s</span>
            <span class="p-era__line p-era__line--left"></span>
          </div>
        </div>
        <div class="c-history-card">
          <div class="c-history-card__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Exterior-1.jpeg" alt="和菓子を作っている写真" class="c-img" /></div>
          <div class="c-history-card__content">
            <span class="c-history-title">現代への進化</span>
            <p class="c-desc">
              1980年代には四代目店主・上符健二が、新しい時代に対応するために製菓技術をさらに高めるとともに、全国展開を目指しました。この時期に、通信販売を開始し、遠方の顧客にも和菓子を届けることが可能になりました。また、全国の百貨店で開催される物産展への出店も始め、茶寮上符の名前は全国的に知られるようになりました。
            </p>
          </div>
        </div>
      </div>
      <div class="p-era-current">
        <span class="p-era-current__label">現在と未来へ</span>
        <p class="p-era-current__desc c-desc">
          2025年現在、茶寮上符は、地元の人々から愛される老舗としての顔と、時代に即した革新性を持つブランドとして成長を続けています。「伝統の継承と新しい挑戦」を理念に掲げ、これからも多くの人々に和の魅力を届けていきます。
        </p>
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