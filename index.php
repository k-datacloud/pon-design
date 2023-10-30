<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/splide.min.css">
</head>

<body>
    <?php get_template_part('components/header-nav') ?>


    <section class="mainvisual">
        <div class="mainvisual__text">
            <h2 class="mainvisual__title">WEB DESIGN SPECIALIST</h2>
            <p class="mainvisual__subtitle">お客様の夢を叶えるWebサイトを制作</p>
            <a href="<?php echo get_permalink(7); ?>" class="main-button"><span
                    class="main-button__link">CONTACT</span></a>
        </div>
        <p class="scroll-animation">SCROLL</p>
    </section>

    <section class="news">
        <h2 class="news__title">NEWS
            <span class="news__subtitle">お知らせ</span>
        </h2>
        <div class="news-content">
            <?php // 最新の投稿を取得
            $args = array(
                'posts_per_page' => 3, // 表示する投稿の数
                'post_status' => 'publish', // 公開済みの投稿のみ取得
            );
            $latest_posts = new WP_Query($args);

            // 取得した投稿をループで表示
            if ($latest_posts->have_posts()) {
                while ($latest_posts->have_posts()) {
                    $latest_posts->the_post();
            ?>
            <p class="news__text">
                <?php $categories = get_the_category();
                        if ($categories) {
                            foreach ($categories as $category) {
                                echo '<span class="news__text--gray">' . $category->name . '</span>';
                            }
                        } ?>
                <a class="news__link" href="#"><?php the_title(); ?></a>
            </p>
            <?php
                }
            }
            // クエリのリセット
            wp_reset_postdata();
            ?>
            <!-- <p class="news__text">2030.02.01
            //     <span class="news__text--gray">お知らせ</span>
            //     <a class="news__link" href="#">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</a>
            // </p>
            // <p class="news__text">2030.02.01
            //     <span class="news__text--gray">制作実績</span>
            //     <a class="news__link" href="#">Smoothiesta様のWebサイトを制作いたしました</a>
            // </p>
            // <p class="news__text">2030.02.01
            //     <span class="news__text--gray">採用</span>
            //     <a class="news__link" href="#">Webデザイナーを1名募集中です!</a>
            // </p> -->
        </div>
    </section>

    <section class="service">
        <h2 class="service__title">SERVICE
            <span class="service__subtitle">事業内容</span>
        </h2>
        <div class="service__wrap">
            <div class="card">
                <img class="card__img" src="<?php echo get_template_directory_uri(); ?>/img/service01.jpg" alt="">
                <h3 class="card__title">Webサイト作成</h3>
                <p class="card__text">新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。</p>
            </div>
            <div class="card">
                <img class="card__img" src="<?php echo get_template_directory_uri(); ?>/img/service02.jpg" alt="">
                <h3 class="card__title">Webサイト運用</h3>
                <p class="card__text">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。</p>
            </div>
            <div class="card">
                <img class="card__img" src="<?php echo get_template_directory_uri(); ?>/img/service03.jpg" alt="">
                <h3 class="card__title">アプリ開発</h3>
                <p class="card__text">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
            </div>
        </div>
        <a href="<?php echo get_permalink(14); ?>" class="button-violet"><span
                class="button-violet__link">MORE</span></a>
    </section>

    <section class="works">
        <div class="works__content">
            <h2 class="works__title">WORKS
                <span class="works__subtitle">制作実績</span>
            </h2>
            <p class="works__text">様々なジャンルのWebサイト制作が可能です。<br>
                ご購入やお申込み数の増加などを実現します!
            </p>
            <a href="<?php echo get_post_type_archive_link('works'); ?>" class="button-violet"><span
                    class="button-violet__link">MORE</span></a>
        </div>
        <div class="splide" role="group" aria-label="Splideの基本的なHTML">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img class="splide__item"
                            src="<?php echo get_template_directory_uri(); ?>/img/works/citylab.jpg" alt=""></li>
                    <li class="splide__slide"><img class="splide__item"
                            src="<?php echo get_template_directory_uri(); ?>/img/works/lamina.jpg" alt=""></li>
                    <li class="splide__slide"><img class="splide__item"
                            src="<?php echo get_template_directory_uri(); ?>/img/works/smoothiesta.jpg" alt=""></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="company">
        <h2 class="company__title">COMPANY
            <span class="company__subtitle">私たちについて</span>
        </h2>
        <h3 class="company__lead">
            サイトのゴール = 夢を叶えること
        </h3>
        <p class="company__text">
            お客様の夢を叶えること。<br>
            それがWebサイトのゴールであり、私たちが目指すことです。<br>
            だからこそちゃんと成果を出すサイトを全力でお作りします。<br>
            お客様の笑顔を見たい。<br>
            夢を実現する手助けをさせてください
        </p>
        <a href="<?php echo get_permalink(12); ?>" class="button-violet"><span
                class="button-violet__link">MORE</span></a>
    </section>

    <section class="recruit">
        <div class="recruit__content">
            <h2 class="recruit__title">RECRUIT
                <span class="recruit__subtitle">採用情報</span>
            </h2>
            <p class="recruit__text">私たちと一緒に働きませんか？</p>
            <a href="<?php echo get_permalink(10); ?>" class="button-violet"><span
                    class="button-violet__link">MORE</span></a>
        </div>
        <div class="recruit__img">
            <img class="recruit__img--detail" src="<?php echo get_template_directory_uri(); ?>/img/recruit.jpg" alt="">
        </div>
    </section>


    <?php get_template_part('components/contact') ?>

    <?php get_template_part('components/footer-nav'); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/splide.min.js"></script>
    <script>
    new Splide('.splide', {

        type: 'fade',
        pagination: true,
        rewind: true,
        autoplay: true,
        interval: 4000,
        pauseOnHover: false,
        resetProgress: false

    }).mount();
    </script>
    <?php get_footer(); ?>

</body>

</html>