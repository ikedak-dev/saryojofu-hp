<footer class="l-footer">
      <ul class="l-footer__icons c-icon-list">
        <li class="c-icon-list__item">
          <a href=""><img class="c-sns-icon-img" src="<?php echo get_template_directory_uri(); ?>/images/x.png" alt="Xのアイコン" /></a>
        </li>
        <li class="c-icon-list__item">
          <a href=""><img class="c-sns-icon-img" src="<?php echo get_template_directory_uri(); ?>/images/fb.svg" alt="FaceBookのアイコン" /></a>
        </li>
        <li class="c-icon-list__item">
          <a href=""><img class="c-sns-icon-img" src="<?php echo get_template_directory_uri(); ?>/images/insta.svg" alt="Instagramのアイコン" /></a>
        </li>
      </ul>
      <div class="l-footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-black.svg" alt="茶寮上符のロゴ" /></div>
      <nav class="l-footer__nav c-nav">
        <ul class="c-nav-list p-nav-footer">
          <li class="c-nav__item"><a class="c-nav__link" href="<?php echo home_url(); ?>">ホーム</a></li>
          <li class="c-nav__item">
            茶寮上符について
            <ul class="c-nav__list p-nav-footer__list p-nav-footer__list--sub">
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/about'); ?>">茶寮上符について</a></li>
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/passion'); ?>">職人の技術</a></li>
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/vision'); ?>">茶寮上符のこだわり</a></li>
            </ul>
          </li>
          <li class="c-nav__item">
            商品紹介
            <ul class="c-nav__list p-nav-footer__list p-nav-footer__list--sub">
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/limited-time-menu'); ?>">期間限定</a></li>
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/yakigashi'); ?>">焼き菓子</a></li>
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/nerigashi'); ?>">練り菓子</a></li>
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/hoshigashi'); ?>">干し菓子</a></li>
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/mochigashi'); ?>">餅菓子</a></li>
              <li class="c-nav__item c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/gift'); ?>">ギフト</a></li>
            </ul>
          </li>
          <li class="c-nav__item"><a class="c-nav__link" href="">おしらせ</a></li>
          <li class="c-nav__item"><a class="c-nav__link" href="<?php echo home_url('/'); ?>#info">店舗情報</a></li>
          <li class="c-nav__item"><a class="c-nav__link" href="<?php echo home_url(); ?>">ご予約・お問い合わせ</a></li>
        </ul>
      </nav>
      <small class="l-footer__copyright c-copyright">Copyright ©2025 Saryo Kamifu Allrights reserved.</small>
    </footer>
    <?php wp_footer(); ?>
