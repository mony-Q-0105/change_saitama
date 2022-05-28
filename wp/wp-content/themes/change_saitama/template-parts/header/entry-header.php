<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; ?>

<?php if ( is_page('entry') ) : ?>
    <img src="/img/bars/bar_application.jpg" alt="「世界を変える起業家」ビジコン in さいたま2019 応募説明会" >
<?php else: ?>
    <?php the_title( '<h2 class="entry-title no-img">', '</h2>' ); ?>
<?php endif; ?>

<?php /*
<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php //twentynineteen_posted_by(); ?>
	<?php //twentynineteen_posted_on(); ?>
    <?php /*
	<span class="comment-count">
		<?php
		//if ( ! empty( $discussion ) ) {
		//	twentynineteen_discussion_avatars_list( $discussion->authors );
		//}
		?>
		<?php //twentynineteen_comment_count(); ?>
	</span>

	<?php
	// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . twentynineteen_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	?>
</div><!-- .meta-info -->
<?php endif; ?>
*/ ?>
