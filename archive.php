<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('components/header-nav'); ?>

    <main>
        <div class="subvisual">
            <h2 class="subvisual__title">News<span class="subvisual__subtext">お知らせ</span></h2>
        </div>

        <?php get_template_part('breadcrumbs'); ?>

        <section class="post">
            <?php if (have_posts()) : ?>
                <? while (have_posts()) : the_post(); ?>
                    <p class="post__item">
                        <?php $categories = get_the_category();
                        if ($categories) {
                            foreach ($categories as $category) {
                                echo '<span class="post__category">' . $category->name . '</span>';
                            }
                        } ?>
                        <a class="post__link" href="#"><?php the_title(); ?></a>
                    </p>
                <? endwhile ?>

            <?php else : ?>
                <p>ニュースはありません。</p>
            <? endif ?>

            <?php
            $args = array(
                'type' => 'list',
                'prev_text' => '&nbsp',
                'show_all' => true,
            );

            echo paginate_links($args);

            ?>

        </section>
        <?php get_template_part('components/contact') ?>
    </main>

    <?php get_template_part('components/footer-nav') ?>

    <?php get_footer(); ?>
</body>

</html>