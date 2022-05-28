<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	<?php endif; ?>

	<div class="entry-content">
        <?php if ( is_page('entry') ) : ?>
            <h3>【応募説明会がスタート！】</h3>

            <p>さいたま市産業創造財団が主催する、「世界を変える起業家」ビジコン in さいたま2019 の応募説明会の日程が決定しました！</p>
            <p>
            ・「世界を変える起業家」ビジコンに興味がある。詳しい内容が知りたい<br>
            ・応募するメリットや出場して良かったことは？<br>
            ・表彰されるプランの条件ってあるの？<br>
            ・まだまだ形にならないアイデアでも大丈夫？<br>
            →すべて説明会で解消いたします！お気軽に参加ください！<br>
            </p>

            <h3>【応募説明会 日程】</h3>

            <ul class="bullet">
                <li>
                2019 年7 月24 日（水）19:00 ～ 20:30<br>
                貸会議室6F　[ 埼玉県さいたま市大宮区宮町1-5 銀座ビル6 階]<br>
                ※大宮駅東口より徒歩1 分
                </li>
                <li>
                2019 年7 月31 日（水）19:00 ～ 20:30
                新宿アントレサロン　[ 東京都新宿区新宿2 丁目12-13 新宿アントレサロンビル2階]<br>
                ※東京メトロ丸ノ内線・副都心線「新宿三丁目駅」Ｃ８出口より徒歩1分<br>
                </li>
                <li>
                2019 年8 月17 日（土）19:00~20:30
                浦和コミュニティセンター　[ さいたま市浦和区東高砂町11-1 コムナーレ10階]<br>
                ※浦和パルコ10 階　浦和駅東口より徒歩1分<br>
                </li>
                <li>
                2019 年9 月4 日（水）19:00~20:30
                武蔵浦和コミュニティセンター　[ さいたま市南区別所7-20-1　サウスピア8階]<br>
                ※武蔵浦和駅より徒歩2分<br>
                </li>
            </ul>

            <h3>【ご入力フォーム】</h3>
            <p><span class="required">*</span>は必須項目です</p>
        <?php elseif ( is_page('examination') ) : ?>
            <h3>【プレゼンテーションによるビジネスプラン発表会】</h3>

            <p>最終審査会の観覧を希望される場合は事前のお申込みが必要です。</p>
            <p>※最終審査会終了後、交流会(参加費無料)を予定しております。</p>

            <div class="horizontal">
                <dl>
                    <dt>開催日時:</dt>
                    <dd>2019年12月4日(水)13:00~18:00(12:30より受付開始)</dd>
                    <dt>場  所:</dt>
                    <dd>さいたま市文化センター(〒336-0024 さいたま市南区根岸1-7-1)
                    <dt>参 加 料:</dt>
                    <dd>無料</dd>
                    <dt>定  員:</dt>
                    <dd>200名</dd>
                    <dt>内  容:</dt>
                    <dd>
                       「世界を変える起業家」ビジコンinさいたま2019最終審査会
                       <ul class="bullet">
                           <li>プレゼンテーションによるビジネスプラン発表会</li>
                           <li>さいたま市ニュービジネス大賞 /「世界を変える起業家」ビジコン受賞者によるトークセッション</li>
                           <li>表彰</li>
                           <li>審査講評</li>
                       </ul>
                     </dd>
                </dl>

            </div>
        <?php endif; ?>

		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
