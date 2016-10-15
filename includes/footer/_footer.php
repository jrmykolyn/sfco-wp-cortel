<footer>
    <section class="content-footer row">
        <section class="footer-about col-xs-12 col-sm-8">
            <h3><?php /* 'Footer Title' HERE */ ?></h3>
            <p>
                <?php /* 'Footer Body' HERE */ ?>
            </p>
        </section>
        <?php
        if ( $footer_links ):
        ?>
        <section class="footer-links col-xs-12 col-sm-4 col-sm-offset-1">
            <h3><?php /* 'Footer Links Title' HERE */ ?></h3>
            <?php
            /* 'Footer Links' LOOP STARTS HERE */
            ?>
            <ul class="footer-links-wrap">
                <li></li>
            </ul>
            <?php
            /* 'Footer Links' LOOP ENDS HERE */
            ?>
        </section>
        <?php
        endif;
        ?>
    </section><!-- .content-footer -->
</footer><!-- footer -->