<!DOCTYPE html>
<html lang="ja">

<head>
    <?php

    use function PHPSTORM_META\type;

    get_header(); ?>
</head>

<body>
    <?php get_template_part('components/header-nav'); ?>

    <!-- メインコンテンツ -->

    <main>
        <div class="subvisual">
            <h2 class="subvisual__title">SERVICE<span class="subvisual__subtext">事業内容</span></h2>
        </div>

        <?php get_template_part('breadcrumbs'); ?>

        <section class="flex-service">
            <div class="web-create">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service01.jpg" alt="" class="web-create__img">
                <div class="textcontent">
                    <h3 class="web-create__title">Webサイト制作</h3>
                    <p class="web-create__text">新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。
                        サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
                    </p>
                </div>
            </div>
            <div class="web-management">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service02.jpg" alt="" class="web-management__img">
                <div class="textcontent">
                    <h3 class="web-management__title">Webサイト運用</h3>
                    <p class="web-management__text">
                        サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。
                        日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。
                        また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。
                    </p>
                </div>
            </div>
            <div class="app-develop">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service03.jpg" alt="" class="app-develop__img">
                <div class="textcontent">
                    <h3 class="app-develop__title">アプリ開発</h3>
                    <p class="app-develop__text">
                        スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。
                        開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。
                    </p>
                </div>
            </div>
        </section>

        <?php get_template_part('components/contact') ?>
    </main>

    <!-- メインコンテンツ  -->

    <?php get_template_part('components/footer-nav') ?>

    <?php get_footer(); ?>
</body>

</html>