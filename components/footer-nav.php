<footer class="footer">
    <ul class="footer__menu">
        <li class="footer__list"><a class="footer__link" href="<?php echo home_url(); ?>">HOME</a></li>
        <li class="footer__list"><a class="footer__link" href="<?php echo get_post_type_archive_link("post") ?>">NEWS</a></li>
        <li class="footer__list"><a class="footer__link" href="<?php echo get_permalink(14); ?>">SERVICE</a></li>
        <li class="footer__list"><a class="footer__link" href="<?php echo get_post_type_archive_link("works") ?>">WORKS</a></li>
        <li class="footer__list"><a class="footer__link" href="<?php echo get_permalink(12); ?>">COMPANY</a></li>
        <li class="footer__list"><a class="footer__link" href="<?php echo get_permalink(10); ?>">RECRUIT</a></li>
        <li class="footer__list"><a class="footer__link" href="<?php echo get_permalink(7); ?>">CONTACT</a></li>
    </ul>
    <p class="footer__text">
        ©PON DESIGN
    </p>
    <div class="smooth-btn"><span class="smooth-btn__text">&#8593;</span></div>
</footer>