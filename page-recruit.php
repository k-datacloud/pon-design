<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('components/header-nav'); ?>

    <!-- メインコンテンツ -->

    <main>
        <div class="subvisual recruit-bottom">
            <h2 class="subvisual__title">RECRUIT<span class="subvisual__subtext">採用情報</span></h2>
        </div>

        <?php get_template_part('breadcrumbs'); ?>

        <div class="recruit-back">
            <section class="recruit-message">
                <h2 class="recruit-message__title">Enjoy Creation for Client
                    <span class="recruit-message__subtitle">楽しむ心が良いモノを生む</span>
                </h2>
                <p class="recruit-message__text">心を弾ましながら<br>
                    夢いっぱいのサイトを作ろう！<br>
                    お客様も自分もみんなが幸せになれるように
                </p>
                <div class="recruit-img">
                    <img class="recruit-img__item" src="<?php echo get_template_directory_uri(); ?>/img/recruit01.jpg" alt="会社の仲間">
                </div>
            </section>
            <section class="recruit-type">
                <h2 class="recruit-type__title">募集中の職種</h2>
                <div class="recruit-guide">
                    <h3 class="recruit-guide__title">Webデザイナー</h3>
                    <div class="recruit-content">
                        <h3 class="recruit-content__title">雇用形態</h3>
                        <p class="recruit-content__text">正社員</p>
                    </div>
                    <div class="recruit-content">
                        <h3 class="recruit-content__title">給与</h3>
                        <p class="recruit-content__text">400万円〜600万円（経験・能力を考慮のうえ優遇</p>
                    </div>
                    <div class="recruit-content">
                        <h3 class="recruit-content__title">仕事内容</h3>
                        <p class="recruit-content__text">Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</p>
                    </div>
                    <div class="recruit-content">
                        <h3 class="recruit-content__title">勤務時間</h3>
                        <p class="recruit-content__text">10:00 〜 19:00（実働8時間、休憩1時間）</p>
                    </div>
                    <div class="recruit-content">
                        <h3 class="recruit-content__title">応募資格</h3>
                        <div class="skill">
                            <p class="skill__text">PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。
                                実務未経験でも学校や独学で学習した方を歓迎します。
                            </p>
                            <ul class="skill__menu">
                                <li>デザインやコーディングを楽しめる方</li>
                                <li>常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方</li>
                                <li>お客様と一緒に楽しみながら高い目的を目指せる方</li>
                            </ul>
                        </div>
                    </div>
                    <a class="button-violet" href="#"><span class="button-violet__link">応募する</span></a>
                </div>
            </section>
        </div>
        <?php get_template_part('components/contact') ?>
    </main>

    <!-- メインコンテンツ  -->

    <?php get_template_part('components/footer-nav') ?>

    <?php get_footer(); ?>
</body>

</html>