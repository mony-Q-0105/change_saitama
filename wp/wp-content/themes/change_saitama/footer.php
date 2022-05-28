</div><!-- #content -->

<div class="to_top" style="display: none;">
   <a href="#masthead"><span class="arrow"></span></a>
</div>

<div class="company">
    <ul>
        <li>
            <a href="http://www.sozo-saitama.or.jp/" target="_blank"><span>主催</span><img src="/img/company_logo/zaidan_logo.png"></a>
        </li>
        <li>
            <a href="http://www.city.saitama.jp/" target="_blank"><span>共催</span><img src="/img/company_logo/saitama_logo.png"></a>
        </li>
        <li>
            <a href="https://www.btm2.com/" target="_blank"><span>事務局</span><img src="/img/company_logo/BTM_logo.jpg"></a>
        </li>
    </ul>
</div>

<footer id="colophon" class="site-footer">

	<div class="site-info">
        <span>Copyright © 2019 saitama sangyou souzou zaidan. all rights reserved.</span>
		<?php /*$blog_info = get_bloginfo( 'name' ); ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<a class="site-name" href="/" rel="home"><?php bloginfo( 'name' ); ?></a>
        <?php endif;*/ ?>
		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) 
		{
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
		}
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
