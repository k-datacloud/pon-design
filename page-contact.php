<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('components/header-nav'); ?>

    <main>
        <div class="subvisual">
            <h2 class="subvisual__title">CONTACT<span class="subvisual__subtext">お問い合わせ</span></h2>
        </div>

        <?php get_template_part('breadcrumbs'); ?>

        <p class="form__text ">Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>


        <?php echo do_shortcode('[contact-form-7 id="20" title="お問い合わせフォーム"]'); ?>

    </main>


    <?php get_template_part('components/footer-nav') ?>
    <?php get_footer(); ?>
</body>

</html>