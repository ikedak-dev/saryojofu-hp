<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php
        if (is_single() || is_page()) {
            the_title();
        } elseif (is_category()) {
            single_cat_title();
        } elseif (is_home()) {
            echo 'ブログ一覧';
        } else {
            echo wp_get_document_title();
        }
        ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <div class="l-header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-black.svg" alt="京都茶寮上符のロゴ" />
        </div>
        <button class="l-header__hamburger c-hamburger js-hamburger">
            <span class="c-hamburger__line js-hamburger-line"></span>
            <span class="c-hamburger__line js-hamburger-line"></span>
            <span class="c-hamburger__line js-hamburger-line"></span>
        </button>
        <nav class="l-header__nav c-nav p-nav js-nav">
            <ul class="p-nav__list c-nav__list">
                <li class="c-nav__item c-nav__item--header"><a class="c-nav__link" href="<?php echo home_url(); ?>">ホーム</a></li>
                <li class="c-nav__item c-nav__item--header">
                    <div class="c-nav__toggle js-nav-toggle">
                        <span>茶寮上符について</span>
                        <svg class="c-nav__arrow js-arrow" width="15" height="10" viewBox="0 0 28 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.8125 0.569244L27.0208 2.77966L14.9854 14.8192C14.7926 15.0133 14.5632 15.1673 14.3106 15.2724C14.058 15.3775 13.7871 15.4316 13.5135 15.4316C13.2399 15.4316 12.9691 15.3775 12.7164 15.2724C12.4638 15.1673 12.2345 15.0133 12.0417 14.8192L-5.53036e-07 2.77966L2.20833 0.571328L13.5104 11.8713L24.8125 0.569244Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <ul class="c-nav__list p-nav__list p-nav__list--sub js-nav-sublist">
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/about'); ?>">茶寮上符について</a></li>
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/passion'); ?>">職人の技術</a></li>
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/vision'); ?>">茶寮上符のこだわり</a></li>
                    </ul>
                </li>
                <li class="c-nav__item c-nav__item--header">
                    <div class="c-nav__toggle js-nav-toggle">
                        <span>商品紹介</span>
                        <svg class="c-nav__arrow js-arrow" width="15" height="10" viewBox="0 0 28 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.8125 0.569244L27.0208 2.77966L14.9854 14.8192C14.7926 15.0133 14.5632 15.1673 14.3106 15.2724C14.058 15.3775 13.7871 15.4316 13.5135 15.4316C13.2399 15.4316 12.9691 15.3775 12.7164 15.2724C12.4638 15.1673 12.2345 15.0133 12.0417 14.8192L-5.53036e-07 2.77966L2.20833 0.571328L13.5104 11.8713L24.8125 0.569244Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <ul class="c-nav__list p-nav__list p-nav__list--sub js-nav-sublist">
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/limited-time-menu'); ?>">期間限定</a></li>
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/yakigashi'); ?>">焼き菓子</a></li>
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/nerigashi'); ?>">練り菓子</a></li>
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/hoshigashi'); ?>">干し菓子</a></li>
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/mochigashi'); ?>">餅菓子</a></li>
                        <li class="c-nav__item c-nav__item--header c-nav__item--sub"><a class="c-nav__link" href="<?php echo home_url('/category/gift'); ?>">ギフト</a></li>
                    </ul>
                </li>
                <li class="c-nav__item c-nav__item--header"><a class="c-nav__link" href="">おしらせ</a></li>
                <li class="c-nav__item c-nav__item--header"><a class="c-nav__link" href="<?php echo home_url('/'); ?>#info">店舗情報</a></li>
                <li class="c-nav__item c-nav__item--header"><a class="c-nav__link" href="<?php echo home_url(); ?>">ご予約・お問い合わせ</a></li>
            </ul>
        </nav>
    </header>
    <?php
    if (!is_front_page()) {
        get_template_part('parts/breadcrumbs');
    }
    ?>