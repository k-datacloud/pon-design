<div class="breadcrumbs">
    <p class="breadcrumbs__text">
        <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
        <span> > </span>
        <?php
        $crumbs = array();
        $home_link = home_url();
        $home_name = 'Home';

        if (is_category()) {
            $category = get_category(get_query_var('cat'), false);
            if ($category->parent != 0) {
                $crumbs[] = '<a href="' . get_category_link($category->parent) . '">' . get_cat_name($category->parent) . '</a>';
            }
            $crumbs[] = '<a href="' . get_category_link($category) . '">' . single_cat_title('', false) . '</a>';
        } elseif (is_tag()) {
            $tag_id = get_query_var('tag_id');
            $tag = get_tag($tag_id);
            $crumbs[] = '<a href="' . get_tag_link($tag_id) . '">' . $tag->name . '</a>';
        } elseif (is_archive() && !is_category() && !is_tag()) {
            $crumbs[] = '' . get_the_archive_title() . '';
        } elseif (is_page() && !is_front_page() && !$post->post_parent) {
            $crumbs[] = '' . get_the_title() . '';
        } elseif (is_page() && !is_front_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            while ($parent_id) {
                $page = get_page($parent_id);
                $crumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $crumbs = array_reverse($crumbs);
            $crumbs[] = '' . get_the_title() . '';
        } elseif (is_single()) {
            $category = get_the_category();
            if ($category) {
                $category_display = '';
                $category_link = '';
                foreach ($category as $cat) {
                    if ($cat->parent == 0) {
                        $category_display = $cat->name;
                        $category_link = get_category_link($cat->term_id);
                    }
                }
                $crumbs[] = '<a href="' . $category_link . '">' . $category_display . '</a>';
            }
            $crumbs[] = '' . get_the_title() . '';
        } elseif (is_404()) {
            $crumbs[] = '404 Not Found';
        }
        if (!empty($crumbs)) {
            echo implode('', $crumbs);
        }
        ?>
    </p>
</div>