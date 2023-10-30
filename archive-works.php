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
            <h2 class="subvisual__title">WORKS<span class="subvisual__subtext">制作実績</span></h2>
        </div>

        <?php get_template_part('breadcrumbs'); ?>

        <section class="works-container">
            <?php if (have_posts()) : ?>
                <ul class="works-list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="works-list__item">
                            <?php if (has_post_thumbnail()) {
                                echo the_post_thumbnail(
                                    'thumbnail',
                                    array(
                                        'class' => 'works-list__img',
                                        'alt' => 'get_the_title()'
                                    )
                                );
                            } ?>
                            <a class="works-list__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>制作実績がありません。</p>
            <?php endif; ?>
        </section>

        <?php get_template_part('components/contact') ?>
    </main>

    <!-- メインコンテンツ  -->

    <?php get_template_part('components/footer-nav') ?>

    <?php get_footer(); ?>
</body>

</html>