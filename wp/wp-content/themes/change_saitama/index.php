<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section id="primary" class="content-area">
    <p>
        <img src="/img/busicon2019_toptext001.png" alt="あなたの新しいビジネスが、世界を、業界を、地域を変えていく">
    </p>

	<main id="main" class="site-main">

        <div class="block news">
            <h2 id="news"> <img src="/img/h_news.png" alt="ニュース"> </h2>
            <div class="news_content">
            <?php
            if ( have_posts() ) {
                echo '<dl>';

                // Load posts loop.
                while ( have_posts() ) {
                    the_post();
                    //get_template_part( 'template-parts/content/content' );
                    echo '<dd>' . get_the_date(). '</dd>';
                    echo '<dt><a href="?p=' . get_the_ID() . '">' . get_the_title() . '</a></dt>';
                }
                echo '</dl>';

                // Previous/next page navigation.
                //twentynineteen_the_posts_navigation();

            } else {
                // If no content, include the "No posts found" template.
                //get_template_part( 'template-parts/content/content', 'none' );
                echo '<p>まだニュースがありません</p>';

            }
            ?>
            </div>
        </div><!--/.news -->

        <div style="">
            <h2><img src="/img/bars/bar_saishuu.jpg" alt="最終審査会 観覧希望申込フォーム"></h2>

            <p style="margin-bottom:40px;">
                <a href="examination"><img src="/img/button_finale_kanran.jpg" alt="応募フォーム"></a>
            </p>

            <h3>【プレゼンテーションによるビジネスプラン発表会】</h3>
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

            <p class="flyer">
                <a href="file/finale2019.pdf" target="_blank">
                    <img src="/img/finale_flyer_01.jpg">
                    <img src="/img/finale_flyer_02.jpg">
                </a>
            </p>

        </div>

        <div class="sns">
            <h2><img src="/img/bars/bar_sns.jpg" alt="「世界を変える起業家」ビジコン in さいたま とは"></h2>
            <ul>
                <li>
                    <div class="fb-page" data-href="https://www.facebook.com/changesaitama" data-tabs="timeline" data-width="500" data-height="460" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/changesaitama" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/changesaitama">世界を変える起業家ビジコン inさいたま</a></blockquote></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" rc="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.3"></script>
                </li>
                <li>
                    <a class="twitter-timeline" data-width="500" data-height="460" data-theme="light" data-chrome="noheader nofooter" data-border-color="#ccc" href="https://twitter.com/change_saitama?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </li>
            </ul>
        </div><!--/.sns -->

        <div class="block">
            <h2 id="about"><img src="/img/bars/bar_about.jpg" alt="「世界を変える起業家」ビジコン in さいたま とは"></h2>

            <div class="alignright">
                <img src="/img/photo/meeting.jpg">
            </div>

            <i class="impact">すべての起業家は、世界を変える力を持っています</i>

            <p>「『世界を変える起業家』ビジコンinさいたま」は、さいたま市から、世界や業界、地域の常識を変えるビジネスを展開する起業家を発掘するコンテストです。<br>
            海外展開だけが「世界を変えるビジネス」ではありません。<br>
            「世界」には3つの意味があります。</p>

            <ul class="bullet">
                <li>海外展開やインバウンドを想定した「世界」</li>
                <li>業種・業界という意味での「世界」</li>
                <li>起業家が活動する地域を中心とした身近な「世界」</li>
            </ul>

            <p>これらの世界を変える、イノベーションをもたらすビジネスプランを募集します。<br>
            さいたま市内のビジネスに関わる多くの機関があなたを後押しし、軌道に乗るまで徹底支援します。</p>



        </div><!--/.block -->

        <div class="block">
            <h2 id="award"><img src="/img/bars/bar_award.jpg" alt="表彰内容"></h2>

            <p>
                <img src="/img/photo/jyusyou-sya.jpg" alt="さいたま市ニュービジネス大賞2017" class="aligncenter">
            </p>

            <h3><img src="/img/busicon_icon-01.jpg" alt="主催者賞"></h3>
            <div class="main_award">
                <img src="/img/award_title.png" alt="・グランプリ ・地域を変える起業家賞 ・女性起業家賞 ・若手起業家賞 ・審査員特別賞 ・オーディエンス賞">
            </div>

            <h4>グランプリ</h4>
            <div class="award_content">
                <p>応募プランのうち最も優秀であり、かつ、次のいずれかに該当するプランが対象です。</p>
                <ul class="bullet">
                    <li>海外展開やインバウンド消費が期待できるビジネスプラン</li>
                    <li>当該業界の常識を変える革新的なビジネスプラン</li>
                </ul>
            </div>

            <h4>地域を変える起業家賞</h4>
            <div class="award_content">
                <p>次のいずれかに該当するプランが対象です。</p>
                <ul class="bullet">
                    <li>子育て、福祉、教育、環境など、地域に関わる課題を解決するビジネスプラン</li>
                    <li>地域資源活用や地域ブランド創出など、地域産業活性化につながるビジネスプラン</li>
                </ul>
            </div>

            <h4>女性起業家賞</h4>
            <div class="award_content">
                <p>次のいずれかに該当する方が対象です。</p>
                <ul class="bullet">
                    <li>個人事業主の場合、応募者が女性であること</li>
                    <li>法人の場合、経営者もしくは応募プランの事業責任者が女性であること</li>
                </ul>
            </div>

            <h4>若手起業家賞</h4>
            <div class="award_content">
                <p>次のいずれかに該当する方が対象です。</p>
                <ul class="bullet">
                    <li>個人事業主の場合、応募者が応募時点で39歳以下であること</li>
                    <li>法人の場合、経営者もしくは応募プランの事業責任者が応募時点で39歳以下であること</li>
                </ul>
            </div>

            <h4>審査員特別賞</h4>
                <div class="award_content">
                <ul class="bullet">
                    <li>審査員から特に推薦のあったビジネスプラン</li>
                </ul>
            </div>

            <h4>オーディエンス賞</h4>
                <div class="award_content">
                <ul class="bullet">
                    <li>最終審査会において、オーディエンス（観覧者）から最も支持されたビジネスプラン</li>
                </ul>
            </div>
        </div><!--/.block -->

        <div class="block">
            <h3><img src="/img/busicon_icon-02.jpg" alt="協賛団体賞"></h3>
            <table class="sponsership_award">
                <tr>
                    <td>賞名</td>
                    <td>協賛団体名および副賞</td>
                </tr>
                <tr>
                    <th> 青木信用金庫賞 </th>
                    <td>
                        青木信用金庫<br>
                        □副賞：月刊「あおしんビジネスクラブ」半年間贈呈（2020年2月～7月）
                    </td>
                </tr>
                <tr>
                    <th>アルヴェアーレ賞</th>
                    <td>
                        株式会社　アクティヴ・ビジネス・サポート<br>
                        □副賞：<br>
                        ・アルヴェアーレシェアオフィス特別プラン　1年間無料利用<br>
                        （24時間365日ご利用可能・登記住所ご利用可能プラン）<br>
                        ・ABS通信 取材・掲載<br>
                        ・非加熱天然ハチミツ1万円分
                    </td>
                </tr>
                <tr>
                    <th>イオンリテール賞</th>
                    <td>
                        イオンリテール株式会社<br>
                        □副賞：自社店舗（さいたま市内）での企業紹介ブース出店枠
                    </td>
                </tr>
                <tr>
                    <th>イノベーションズアイ賞</th>
                    <td>
                        株式会社ノーズフー<br>
                        □副賞：イノベーションズアイのスタンダード会員1年間無料利用
                    </td>
                </tr>
                <tr>
                    <th>川口信用金庫賞</th>
                    <td>
                        川口信用金庫<br>
                        □副賞：団体賞として、主催者賞受賞者全員の紹介ページを「景況レポート」に掲載
                    </td>
                </tr>
                <tr>
                    <th>URAWAコワーキングスペース ウラコ賞</th>
                    <td>
                        NPO法人コミュニティビジネスサポートセンター<br>
                        □副賞：コワーキングスペース　半年間無料利用
                    </td>
                </tr>
                <tr>
                    <th>コワーキングスペース７F（ナナエフ）賞</th>
                    <td>
                    株式会社コミュニティコム <br>
                    □副賞：コワーキングスペース1年間無料利用
                    </td>
                </tr>
                <tr>
                    <th>さいたま起業家協議会賞</th>
                    <td>
                        NPO法人さいたま起業家協議会
                    </td>
                </tr>
                <tr>
                    <th>埼玉縣信用金庫賞</th>
                    <td>
                        埼玉縣信用金庫 <br>
                        □副賞：<br>
                        ・「さいしん景況レポート」及び「コラボだより」への掲載<br>
                        ・（一社）さいしんコラボ産学官会員サービスの提供（1年間）<br>
                        ・カタログギフト<br>
                    </td>
                </tr>
                <tr>
                    <th>埼玉県中小企業診断協会賞 </th>
                    <td>
                        （一社）埼玉県中小企業診断協会
                    </td>
                </tr>
                <tr>
                    <th>さいたま商工会議所会頭賞</th>
                    <td>
                        さいたま商工会議所
                    </td>
                </tr>
                <tr>
                    <th>埼玉大学先端産業国際ラボラトリー所長賞</th>
                    <td>
                        国立大学法人埼玉大学研究機構先端産業国際ラボラトリー <br>
                        □副賞：先端産業国際ラボラトリーにおいて研究開発アドバイス1年間無料
                    </td>
                </tr>
                <tr>
                    <th>埼玉ニュービジネス協議会賞</th>
                    <td>
                        一般社団法人埼玉ニュービジネス協議会 （ＳＮＢＣ） <br>
                        □副賞：<br>
                        ・入会金無料 <br>
                        ・埼玉NBCの会員として1年間活動可能 <br>
                        ・定例会、他のNBCの例会・交流会に出席可能 <br>
                    </td>
                </tr>
                <tr>
                    <th>埼玉りそな賞</th>
                    <td>
                        株式会社埼玉りそな銀行<br>
                        □副賞：<br>
                        りそな総合研究所会員1年間無料<br>
                        もしくは<br>
                        朝食懇談会及びビジネスセミナー各2回ずつ無料<br>

                    </td>
                </tr>
                <tr>
                    <th>そごう賞</th>
                    <td>
                        株式会社そごう・西武（そごう大宮店）
                    </td>
                </tr>
                <tr>
                    <th>日刊工業新聞社賞</th>
                    <td>
                        株式会社日刊工業新聞社<br>
                        □副賞：全国版紙面での受賞者・ビジネスプランの紹介
                    </td>
                </tr>
                <tr>
                    <th>飯能信用金庫賞</th>
                    <td>
                        飯能信用金庫
                    </td>
                </tr>
                <tr>
                    <th>パルコ賞</th>
                    <td>
                        株式会社パルコ
                    </td>
                </tr>
                <tr>
                    <th>ぶぎん賞</th>
                    <td>
                        株式会社武蔵野銀行
                    </td>
                </tr>
                <tr>
                    <th>Mioオフィス賞</th>
                    <td>
                        株式会社Mio<br>
                        □副賞：Mioオフィス入居賃料50万円相当
                    </td>
                </tr>

            </table>

            <p>副賞に関しては、掲載の許可をいただいた団体のみ掲載しています。</p>

        </div><!--/.block -->

        <div class="block judge">
            <h2><img src="/img/bars/bar_judge.jpg" alt="審査員"></h2>
            <ul>
                <li>
                    <img src="/img/photo/sinsain_01_shirakawa_susumu.jpg">
                    <div class="profile">
                        <div class="name">白川 進氏</div>
                        株式会社テクノスコープ代表取締役
                    </div>
                </li>
                <li>
                    <img src="/img/photo/sinsain_04_tanaka_ayaka.jpg">
                    <div class="profile">
                        <div class="name">田中 綾華氏</div>
                        ROSE LABO株式会社 代表取締役
                    </div>
                </li>
                <li>
                    <img src="/img/photo/sinsain_02_hiranuma_daijirou.jpg">
                    <div class="profile">
                        <div class="name">平沼 大二郎氏</div>
                        株式会社サイホーホールディングス 代表取締役
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="/img/photo/sinsain_05_mitsuhata_yuka.jpg">
                    <div class="profile">
                        <div class="name">光畑 由佳氏</div>
                        有限会社モーハウス 代表取締役
                    </div>
                </li>
                <li>
                    <img src="/img/photo/sinsain_06_yamamoto_yasuhiro.jpg">
                    <div class="profile">
                        <div class="name">山本 康博氏</div>
                        株式会社ビジネス・バリュー・クリエイションズ 代表取締役
                    </div>
                </li>
                <li>
                    <img src="/img/photo/sinsain_03_yokoi_hiroyuki.jpg">
                    <div class="profile">
                        <div class="name">横井 博之氏</div>
                        株式会社ICST 代表取締役
                    </div>
                </li>
            </ul>


        </div><!--/.block -->

        <div class="block">
            <h2 id="benefits"><img src="/img/bars/bar_benefit.jpg" alt="特典"></h2>

            <h3><img src="/img/busicon_icon-03.jpg" alt="応募者特典"></h3>
            <div class="benefit_content">
                <ul>
                    <li>◎当財団主催の各種セミナーの受講料が無料に
                        <p>※対象となるセミナーについては、開催の都度、当財団Ｗｅｂサイトに掲示します。</p>
                    </li>
                    <li>◎ビジネスプランの実現に向けて改善ポイントを当財団のアドバイザー等が個別アドバイス</li>
                </ul>
            </div>

            <h3><img src="/img/busicon_icon-04.jpg" alt="第一次審査通過者特典"></h3>
            <div class="benefit_content">
                <ul>
                    <li>◎ビジネスプランのブラッシュアップ、アドバイス及び資金調達相談等のサポート、第2次審査会、最終審査会対策としてのプレゼンテーション講習等、プランに応じた特別支援</li>
                    <li>◎必要に応じてビジネスプランの実現に向けた創業アドバイザーの無料アドバイス</li>
                </ul>
            </div>

            <h3><img src="/img/busicon_icon-05.jpg" alt="受賞者特典"></h3>
            <div class="benefit_content">
                <ul class="bullet">
                    <li>受賞後３年間、当財団のアドバイザーや外部専門家、メンター等による無料経営相談サポート</li>
                    <li>金融機関・クラウドファンディングなど、資金調達や販路開拓に向けたビジネスマッチング</li>
                    <li>受賞者、受賞プランについてのマスコミ向けＰＲ</li>
                    <li>当財団が主催する各種セミナー、Webサイト、広報誌、受賞者紹介パンフレットおよび各種メディア等を通じた受賞者事業のＰＲ</li>
                    <li>活用可能な公的補助金について情報提供、応募の際の書類作成についてアドバイス</li>
                </ul>
            </div>


        </div><!--/.block -->

        <div class="block">
            <h2 id="schedule"><img src="/img/bars/bar_schedule.jpg" alt="スケジュール"></h2>
            <img src="/img/busicon2019_schedule.png" alt="スケジュール">

        </div><!--/.block -->

        <div class="block">
            <h2 id="entry"><img src="/img/bars/bar_entry.jpg" alt="エントリー"></h2>

            <div class="entry_content">
                <h3><img src="/img/busicon_icon-06.jpg" alt="応募資格"></h3>
                <p>以下のいずれかに該当する方が対象です。</p>
                <ul class="bullet">
                    <li>①さいたま市内に事業所を持つ個人事業主または法人</li>
                    <li>②応募時点から1年以内に、さいたま市内に事業所を開設する予定のある個人事業主または法人</li>
                </ul>
                <p>※法人の場合、ビジネスプランの事業遂行責任者を応募者としてください。</p>
            </div>

            <div class="entry_content">
                <h3><img src="/img/busicon_icon-07.jpg" alt="募集対象"></h3>
                <p>新事業のビジネスプランで、以下のいずれかに該当するプランが対象です。<br>
                ただし、応募時点で、他のコンテスト等で受賞実績のあるビジネスプランは応募できません。</p>
                <ul class="bullet">
                    <li>①応募時点で１年以内の実施を見込むビジネスプラン</li>
                    <li>②応募時点で売上計上（試作品等の売上を含む。）から３年以内のビジネスプラン</li>
                </ul>
            </div>

            <div class="entry_content">
                <h3 id="require"><img src="/img/busicon_icon-08.jpg" alt="応募方法"></h3>
                <p>当コンテスト特設サイト（change-saitama.com）より応募用紙をダウンロードし、事務局あてe-mailアドレス（change-saitama2019@sozo-saitama.or.jp）に添付し、ご応募ください。</p>
                <p>※製造業の方は、応募用紙の最終ページにある「生産技術詳細」にご記入のうえ同時に提出してください。</p>
                <div class="button_area">
                    <a href="file/change-entrysheet2019.zip" target="_blank"><img src="/img/button_application_form.jpg" alt="応募用紙"></a>
                    <a href="file/2019bosyuu_youkou.pdf" target="_blank"><img src="/img/button_require.jpg" alt="募集要項"></a>
                </div>
            </div>


            <div class="entry_content">
                <h3><img src="/img/busicon_icon-09.jpg" alt="募集期間"></h3>
                <p>2019年7月10日（水）～2019年9月18日（水）</p>
            </div>

            <div class="clear">
                <h3><img src="/img/busicon_icon-10.jpg" alt="審査基準"></h3>
                <div class="standard alignright">
                    <img src="/img/img_standard.png" alt="審査基準">
                </div>
                <ul class="bullet">
                    <li>革新性・独創性</li>
                    <li>実現可能性・競争優位性</li>
                    <li>成長性</li>
                    <li>さいたま市への波及効果</li>
                    <li>経営者能力（第２次審査会および最終審査会のみ）</li>
                </ul>

            </div>

            <div class="entry_content">
                <h3><img src="/img/busicon_icon-11.jpg" alt="審査過程"></h3>
                <ul class="bullet">
                    <li>第１次審査会（書類審査）<br>
                        1０月中旬にメールで結果を通知いたします
                    </li>

                    <li>第２次審査会（プレゼンテーションと面接によるクローズド審査）<br>
                    日程：令和元年11月６日（水）<br>
                    会場：さいたま市産業文化センター（予定）<br>
                    11月上旬にメールで結果を通知いたします
                    </li>

                    <li>最終審査会・授賞式（プレゼンテーションによるオープン審査）<br>
                    日程：令和元年12月4日（水）<br>
                    会場：さいたま市文化センター　小ホール<br>
                    ※原則として、応募者が第2次審査、最終審査のプレゼン発表者となります。<br>
                    ※最終審査会観覧についての詳細は、11月中旬に特設Webサイトに掲載予定です。<br>
                    観覧を希望される方は、「最終審査会観覧申込書」（11月中旬に特設Webサイトに掲載予定）に所定事項を記入のうえ、メールまたはＦＡＸにより事務局あてにお申し込みください（入場無料）。
                    </li>

                </ul>
            </div>

            <div class="entry_content">
                <h3><img src="/img/busicon_icon-12.jpg" alt="応募に向けたサポート"></h3>
                <p>応募プランの書き方が分からない方やブラッシュアップをご希望の方は、当財団のアドバイザー等が無料で何回でも個別にアドバイスいたします。</p>
                <p>お気軽にお電話でお問い合わせください。（TEL：048-851-6652）</p>

            <div>
        </div>

        <div class="block">
            <h2 id="briefing"><img src="/img/bars/bar_briefing.jpg" alt="応募説明会"></h2>
            <p>【「世界を変える起業家」ビジコンinさいたま】応募者説明会日程</p>

            <table style="margin-bottom: 2rem;">
                <tr>
                    <th><span <?php if( time() >= strtotime( '2019-07-24 23:59:59' ) ): ?>class="strike"<?php endif; ?>>2019年7月24日（水）19:00～20:30</span></th>
                    <td>
                    貸会議室6F　[埼玉県さいたま市大宮区宮町1-5 銀座ビル6階]<br>
                    ※大宮駅東口より徒歩1分
                    </td>
                </tr>
                 <tr>
                    <th><span <?php if( time() >= strtotime(  '2019-07-31 23:59:59' ) ): ?>class="strike"<?php endif; ?>>2019年7月31日（水）19:00～20:30</span></th>
                    <td>
                    新宿アントレサロン　[東京都新宿区新宿2丁目12-13 新宿アントレサロンビル2階]<br>
                    ※東京メトロ丸ノ内線・副都心線「新宿三丁目駅」C8出口より徒歩１分</p>
                    </td>
                </tr>
                <tr>
                    <th><span <?php if( time() >=  strtotime( '2019-08-17 23:9:59' ) ): ?>class="strike"<?php endif; ?>>2019年8月17日（土）19:00~20:30</span></th>
                    <td>
                    浦和コミュニティセンター　[さいたま市浦和区東高砂町11-1 コムナーレ10階]<br>
                    ※浦和パルコ10階　浦和駅東口より徒歩１分</p>
                    </td>
                </tr>
                <tr>
                    <th><span <?php if( time() >= strtotime( '2019-09-04 23:59:59' ) ): ?>class="strike"<?php endif; ?>>2019年9月4日（水）19:00~20:30</span></th>
                    <td>
                    武蔵浦和コミュニティセンター　[さいたま市南区別所7-20-1　サウスピア8階]<br>
                    ※武蔵浦和駅より徒歩2分</p>
                    </td>
                </tr>
            </table>

<?php /*
            <div style="text-align: center;">
                <a href="entry"><img src="/img/button_entry.jpg" alt="応募フォーム"></a>
            </div>
*/ ?>

            <div style="margin-top: 3rem;">
                <b>応募書類作成のためのミニセミナー＆相談会（無料）を実施します！</b>
                <p>「アイデアはあるが、応募書類に落とし込めない」という方のために、中小企業診断士による少人数制のミニセミナー＆相談会を実施します。（無料・各回定員３名）</p>
                <p>「いくつかアイデアがあり、どれが有望か分からない」という方にもアドバイスいたします。</p>

                <ul style="margin-bottom: 1rem;">
                    <li>８月１５日（木）１３:００～１５:００　担当：梁川先生</li>
                    <li>８月２３日（金）１０:００～１２:００　担当：井手先生</li>
                    <li>８月２９日（木）１０:００～１２:００　担当：梁川先生</li>
                    <li>９月５日（木）　１０:００～１２:００　担当：梁川先生</li>
                    <li>９月６日（金）　１０:００～１２:００　担当：井手先生</li>
                    <li>９月１２日（木）１０:００～１２:００　担当：梁川先生</li>
                </ul>

                <address>
                    会場：さいたま市産業創造財団（与野本町駅より徒歩７分　無料駐車場あり）<br>
                    　　　さいたま市中央区下落合５－４－３　さいたま市産業文化センター４F<br>
                    お申し込み方法：前日までに電話、またはメールにてお問い合わせください<br>
                    さいたま市産業創造財団　担当：長尾・福田<br>
                    TEL：０４８－８５１－６６５２<br>
                    E-mail：change-saitama2019@sozo-saitama.or.jp
                </address>

            </div>

        </div><!--/.block -->

        <div class="block">
            <h2 id="notes"><img src="/img/bars/bar_notes.jpg" alt="注意事項"></h2>
            <ul class="bullet">
                <li>提出された書類は返却いたしません。</li>
                <li>お申込みいただいたプランは、審査会・発表会等において公表されることに同意したものとして取り扱います。申込内容に関する特別なノウハウや秘密事項については、あらかじめ法的保護を行う等、応募者の責任でご対応ください。</li>
                <li>申込書記載の個人情報につきましては、本事業の実施に関する事項及び当財団の発行する広報誌、パンフレット等の送付や当財団が実施するセミナー等の案内にのみ利用させていただきます。</li>
                <li>審査結果に関する個別のお問合せには、一切お答えできません。</li>
                <li>応募書類は応募者ご自身でご記入ください。応募資格、募集対象等に違反する事項があった場合、失格あるいは受賞取消しとなる場合があります。</li>
                <li>応募に係る一切の経費は応募者の負担となります。</li>
                <li>応募者は、本賞に関わる事業として、審査会でのプラン発表、パンフレットへの掲載および受賞後支援等への参加または協力が原則となります。</li>
            </ul>

        </div><!--/.block -->

        <div class="block">
            <h2 id="contact"><img src="/img/bars/bar_contact.jpg" alt="お問い合わせ・応募先"></h2>
            <address>
                「世界を変える起業家」ビジコンinさいたま2019事務局<br>
                株式会社BTM ベストタイムマネジメント　担当：北村<br>
                住所：〒336-0015さいたま市南区太田窪2306-17-1F<br>
                TEL：048-716-9081&nbsp;
                <span style="font-size: small;">※お電話でのお問い合わせ時間：10：00～17：00 （土日、祭日を除く）</span><br>
                E-mail : change-saitama2019@sozo-saitama.or.jp<br>
            </address>

        </div><!--/.block -->

        <div class="block">
            <h2 id="organizer"><img src="/img/bars/bar_organizer.jpg" alt="主催者"></h2>
            <address>
                公益財団法人 さいたま市産業創造財団<br>
                支援・金融課　担当：福田、長尾<br>
                住所：〒338-0002さいたま市中央区下落合5-4-3　さいたま市産業文化センター４階<br>
                TEL：048-851-6652<br>
                FAX：048-851-6653
            </address>
        </div><!--/.block -->

        <div class="block">
            <h2 id="sponsor"><img src="/img/bars/bar_sponsor.jpg" alt="協賛・後援・協力"></h2>
            <h3><img src="/img/busicon_icon-13.jpg" alt="協賛"></h3>
            <ul class="sponsor_content">
                <li>さいたま市</li>
            </ul>

            <h3><img src="/img/busicon_icon-14.jpg" alt="後援"></h3>
            <ul class="sponsor_content">
                <li>（公財）埼玉県産業振興公社（創業・ベンチャー支援センター埼玉）</li>
                <li>埼玉新聞社</li>
                <li>テレ玉</li>
                <li>株式会社日本政策金融公庫</li>
                <li>日本経済新聞社さいたま支局</li>
            </ul>

            <h3><img src="/img/busicon_icon-15.jpg" alt="協力"></h3>
            <ul class="sponsor_content">
                <li>埼玉県産業技術総合センター</li>
            </ul>
            
        </div><!--/.block -->

    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php
get_footer();
