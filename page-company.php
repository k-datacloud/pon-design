<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('components/header-nav'); ?>

    <!-- メインコンテンツ -->

    <main>
        <div class="subvisual">
            <h2 class="subvisual__title">COMPANY<span class="subvisual__subtext">会社概要</span></h2>
        </div>

        <?php get_template_part('breadcrumbs'); ?>

        <section class="company company-bottom">
            <h2 class="company__title">メッセージ
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
        </section>

        <section class="president">
            <div class="president-img">
                <img class="president-img__item" src="<?php echo get_template_directory_uri(); ?>/img/ceo.jpg" alt="社長の写真">
            </div>
            <p class="president__text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります

                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります

                <span class="president__name">代表取締役社長 猫山ポン太郎</span>
            </p>
        </section>

        <section class="summary">
            <h2 class="summary__title">会社概要</h2>
            <div class="summary-content">
                <h3 class="summary-content__title">社名</h3>
                <p class="summary-content__text">株式会社PON DESIGN</p>
            </div>
            <div class="summary-content">
                <h3 class="summary-content__title">設立</h3>
                <p class="summary-content__text">2025.02.10</p>
            </div>
            <div class="summary-content">
                <h3 class="summary-content__title">代表取締役</h3>
                <p class="summary-content__text">猫山ポン太郎</p>
            </div>
            <div class="summary-content">
                <h3 class="summary-content__title">資本金</h3>
                <p class="summary-content__text">1,000,000円</p>
            </div>
            <div class="summary-content">
                <h3 class="summary-content__title">所在地</h3>
                <p class="summary-content__text">〒555-5555 東京都千代田区 ポンビルディング 606</p>
            </div>
            <div class="summary-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25924.7896209476!2d139.73577963837076!3d35.68688194543848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c0c0b13f54d%3A0xb630953beee48188!2z5p2x5Lqs6YO95Y2D5Luj55Sw5Yy6!5e0!3m2!1sja!2sjp!4v1687661618409!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>

        <?php get_template_part('components/contact') ?>
    </main>

    <!-- メインコンテンツ  -->

    <?php get_template_part('components/footer-nav') ?>

    <?php get_footer(); ?>
</body>

</html>