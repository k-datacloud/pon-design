<header class="header" id="header">
        <h1 class="header__title"><a class="header__title--link" href="<?php echo home_url(); ?>">PON DESIGN</a></h1>
        <nav class="header__nav">
                <ul class="header-list">
                        <li class="header-list__item"><a class="header-list__link" href="<?php echo home_url('/post'); ?>">NEWS</a>
                        </li>
                        <li class="header-list__item"><a class="header-list__link" href="<?php echo get_permalink(14); ?>">SERVICE</a></li>
                        <li class="header-list__item"><a class="header-list__link" href="<?php echo get_post_type_archive_link('works'); ?>">WORKS</a>
                        </li>
                        <li class="header-list__item"><a class="header-list__link" href="<?php echo get_permalink(12); ?>">COMPANY</a>
                        </li>
                        <li class="header-list__item"><a class="header-list__link" href="<?php echo get_permalink(10); ?>">RECRUIT</a></li>
                        <li class="header-list__item"><a class="header-list__link" href="<?php echo get_permalink(7); ?>">CONTACT</a></li>
                </ul>
        </nav>
        <div class="humburger">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
        </div>
</header>