<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php /*<meta name="viewport" content="width=device-width, initial-scale=1" /> */ ?>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/fonts/yakuhanjp-master/dist/css/yakuhanjp.min.css" />
    <?php wp_head(); ?>

    <script src="<?php bloginfo( 'template_directory' ); ?>/js/script.js"></script>
    <?php if( is_singular() ): ?>
        <?php
            global $post;
            setup_postdata($post);
            $ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
        ?>
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo $post->post_title; ?>">
        <meta property="og:description" content="<?php echo esc_attr($ogp_descr); ?>">
        <meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>">
    <?php elseif( is_front_page() ): ?>
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php bloginfo('name'); ?>">
        <meta property="og:description" content="<?php bloginfo('description'); ?>">
        <meta property="og:url" content="<?php echo esc_url( home_url() ); ?>">
    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@change_saitama">
    <meta property="og:image" content="<?php echo esc_url( home_url() . '/img/busicon2019_top.jpg' ); ?>">
    <meta property="og:locale" content="ja_JP" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.3"></script>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>"> 
    <h1>
        <a href="/">
            <img src="/img/busicon2019_top.jpg" alt="">
        </a>
    </h1>

	<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
		<div class="site-featured-image">
		<?php
		twentynineteen_post_thumbnail();
		the_post();
		$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

		$classes = 'entry-header';
		if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
			$classes = 'entry-header has-discussion';
		}
		?>
		<div class="<?php echo $classes; ?>">
			<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
		</div><!-- .entry-header -->
		<?php rewind_posts(); ?>
		</div>
	<?php endif; ?>
    <nav class="menu">
        <ul>
            <li><a href="/"><img src="/img/menu_home.jpg" alt="ホーム"></a></li>
            <?php if ( is_page() || is_single() ): ?>
                <li><a href="/#about"><img src="/img/menu_about.jpg" alt="「世界を変える起業家」ビジコンとは"></a></li>
                <li><a href="/#award"><img src="/img/menu_award.jpg" alt="表彰内容"></a></li>
                <li><a href="/#entry"><img src="/img/menu_entry.jpg" alt="エントリー"></a></li>
                <li><a href="/#require"><img src="/img/menu_require.jpg" alt="募集要項"></a></li>
            <?php else: ?>
                <li><a href="/#about"><img src="/img/menu_about.jpg" alt="「世界を変える起業家」ビジコンとは"></a></li>
                <li><a href="/#award"><img src="/img/menu_award.jpg" alt="表彰内容"></a></li>
                <li><a href="/#entry"><img src="/img/menu_entry.jpg" alt="エントリー"></a></li>
                <li><a href="/#require"><img src="/img/menu_require.jpg" alt="募集要項"></a></li>
            <?php endif; ?>
            <li><a href="/contact"><img src="/img/menu_contact.jpg" alt="お問い合わせ"></a></li>
        </ul>
    </nav>
    
</header><!-- #masthead -->

<div id="content" class="site-content">
