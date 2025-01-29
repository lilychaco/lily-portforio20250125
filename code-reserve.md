<!--FVスライダー-->
<div class="fv__slider-wrap">
	<div class="fv__slider swiper js-fv-swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<?php
					// 設定ページのIDを指定
					$page_id = 438;
					// グループフィールドを取得
					$fvImage01 = get_field('fv_image_1', $page_id);

					// 各デバイス向けの画像フィールドを取得
					$fvImage01PC = $fvImage01['fv_image_1_pc'] ?? ''; // PC用画像
					$fvImage01SP = $fvImage01['fv_image_1_sp'] ?? ''; // SP用画像
					?>
				<figure class="fv__slider-img">
					<picture>
						<!-- PC用画像を設定 -->
						<?php if ($fvImage01PC): ?>
						<source srcset="<?php echo esc_url($fvImage01PC); ?>" media="(min-width: 768px)" />
						<?php endif; ?>
						<!-- SP用画像を設定 -->
						<img src="<?php echo esc_url($fvImage01SP ?: $fvImage01PC); ?>" alt="ファーストビュー画像1" />
					</picture>
				</figure>
			</div>
			<div class="swiper-slide">
				<?php
					// 設定ページのIDを指定
					$page_id = 438;
					// グループフィールドを取得
					$fvImage02 = get_field('fv_image_2', $page_id);

        // 各デバイス向けの画像フィールドを取得
        $fvImage02PC = $fvImage02['fv_image_2_pc'] ?? ''; // PC用画像
        $fvImage02SP = $fvImage02['fv_image_2_sp'] ?? ''; // SP用画像
    ?>
				<figure class="fv__slider-img">
					<picture>
						<!-- PC用画像を設定 -->
						<?php if ($fvImage02PC): ?>
						<source srcset="<?php echo esc_url($fvImage02PC); ?>" media="(min-width: 768px)" />
						<?php endif; ?>
						<!-- SP用画像を設定 -->
						<img src="<?php echo esc_url($fvImage02SP ?: $fvImage02PC); ?>" alt="ファーストビュー画像1" />
					</picture>
				</figure>
			</div>

			<div class="swiper-slide">
				<?php
        // 設定ページのIDを指定
					$page_id = 438;
					// グループフィールドを取得
					$fvImage03 = get_field('fv_image_3', $page_id);

        // 各デバイス向けの画像フィールドを取得
        $fvImage03PC = $fvImage03['fv_image_3_pc'] ?? ''; // PC用画像
        $fvImage03SP = $fvImage03['fv_image_3_sp'] ?? ''; // SP用画像
    ?>
				<figure class="fv__slider-img">
					<picture>
						<!-- PC用画像を設定 -->
						<?php if ($fvImage03PC): ?>
						<source srcset="<?php echo esc_url($fvImage03PC); ?>" media="(min-width: 768px)" />
						<?php endif; ?>
						<!-- SP用画像を設定 -->
						<img src="<?php echo esc_url($fvImage03SP ?: $fvImage03PC); ?>" alt="ファーストビュー画像1" />
					</picture>
				</figure>
			</div>

			<div class="swiper-slide">
				<?php
					// 設定ページのIDを指定
					$page_id = 438;
					// グループフィールドを取得
					$fvImage04 = get_field('fv_image_4', $page_id);

        // 各デバイス向けの画像フィールドを取得
        $fvImage04PC = $fvImage04['fv_image_4_pc'] ?? ''; // PC用画像
        $fvImage04SP = $fvImage04['fv_image_4_sp'] ?? ''; // SP用画像
    ?>
				<figure class="fv__slider-img">
					<picture>
						<!-- PC用画像を設定 -->
						<?php if ($fvImage04PC): ?>
						<source srcset="<?php echo esc_url($fvImage04PC); ?>" media="(min-width: 768px)" />
						<?php endif; ?>
						<!-- SP用画像を設定 -->
						<img src="<?php echo esc_url($fvImage04SP ?: $fvImage04PC); ?>" alt="ファーストビュー画像1" />
					</picture>
				</figure>
			</div>
		</div>
	</div>
</div>



<!--キャンペーンカードプライス-->
<div class="campaign-card__text">
	<!-- <p class="campaign-card__price-info">
							</p> -->
	<?php
							// グループフィールド「campaign-price」の値を取得
							$priceInfo = get_field('campaign-price');

							// サブフィールド「campaign-price_old」と「campaign-price_new」を取得
							$price_old = $priceInfo['campaign-price_old'] ?? ''; // 値がない場合は空文字を設定
							$price_new = $priceInfo['campaign-price_new'] ?? ''; // 値がない場合は空文字を設定
							?>
	<div class="campaign-card__price-text">
		<?php if (!empty($price_old)) : ?>
		<p class="campaign-card__price-old">
			&yen;<?php echo esc_html(number_format($price_old)); ?>
		</p>
		<?php endif; ?>
		<?php if (!empty($price_new)) : ?>
		<p class="archive-campaign-card__price-new">
			&yen;<?php echo esc_html(number_format($price_new)); ?>
		</p>
		<?php endif; ?>
	</div>

</div>



<!--inner幅を超えて、右余白を画面いっぱいにする
-->
<style>
margin-right:calc(50%-50vw);
</style>



<div class="campaign-card__text">
	<?php
									// 現在表示中のページ（固定ページや投稿など）のIDを取得
									$current_post_id = get_the_ID();

									// 現在のページIDをもとにカスタムフィールドの値を取得
									$link_url = get_post_meta($current_post_id, 'link-url', true);
									$user_name = get_post_meta($current_post_id, 'user-name', true);
									$password = get_post_meta($current_post_id, 'password', true);
									?>

	<?php if ($link_url) : ?>
	<p class="campaign-card__price-info">クリックしたらサイトへ飛びます</p>
	<?php endif; ?>

	<?php if (!empty($user_name) || !empty($password)) : ?>
	<p class="campaign-card__price-info">
		<?php if (!empty($user_name)) : ?>
		ユーザー名: <?php echo esc_html($user_name); ?><br>
		<?php endif; ?>
		<?php if (!empty($password)) : ?>
		パスワード: <?php echo esc_html($password); ?>
		<?php endif; ?>
	</p>
	<?php endif; ?>
</div>


<!--contact 右側の部分
-->
<div class="contact__item contact__cta">
	<div class="contact__heading section-heading">
		<h3 class="section-heading__title section-heading__title--contact">
			Contact
		</h3>
		<h2 class="section-heading__subtitle section-heading__subtitle--contact u-desktop">
			お問い合わせ
		</h2>
		<h2 class="section-heading__subtitle section-heading__subtitle--contact u-mobile">
			お問合せ
		</h2>
		<p class="section-heading__text">
			ご予約・お問い合わせはコチラ
		</p>
	</div>
	<div class="contact__button">
		<a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Contact us</a>
	</div>
</div>


<!--top blog 魚のあしらい-->
<figure class="top-blog__fish-image u-desktop">
	<img src="<?php echo get_theme_file_uri(); ?>/assets/images/accent02.png" alt="魚のイラスト" />
</figure>

<h3 class="section-heading__title section-heading__title--top-blog">
	Blog
</h3>


<figure class="top-voice__fish-image u-desktop">
	<img src="<?php echo get_theme_file_uri(); ?>/assets/images/accent03.png" alt="魚のイラスト" />
</figure>

<!--gallery 魚のあしらい-->
<!-- .gallery__inner::after {
display: none;

@include mq(md) {
content: '';
display: block;
width: rem(301);
height: rem(138);
background-image: url('../images/contact-fish.png');
background-size: cover;
position: absolute;
top: -76px;
right: calc(50% - min(48vw, 40rem));
z-index: 100;
}
} -->

***
<pre>
		function theme_enqueue_styles() {
		// Google Fontsの読み込み
		wp_enqueue_style('mytheme-google-fonts',
		'https://fonts.googleapis.com/css2?family=Lato&family=Gotu&family=Noto+Sans+JP:wght@400;500;700&display=swap', [],
		null);

		// jQueryを読み込む（WordPressの標準jQuery）
		wp_enqueue_script('jquery');

		// Swiper JSとそのCSSの読み込み
		wp_enqueue_script('mytheme-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', [], null, true);
		wp_enqueue_style('mytheme-swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', [], null);

		// ローカルJavaScriptファイルの読み込み
		wp_enqueue_script('jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', ['jquery'], null,
		true);
		wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
		wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom-slider.js', ['jquery'], null,
		true);

		// jQuery UI CSSの読み込み
		wp_enqueue_style('jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', [], null);

		// ローカルCSSファイルの読み込み
		$theme_version = wp_get_theme()->get('Version');
		wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/styles.css', [], $theme_version);
		}
		add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
</pre>


	//weather-appのCSSとJSを読み込む
function enqueue_weather_app_assets() {
    $uploads_dir = wp_upload_dir(); // アップロードディレクトリのURLを取得
    $base_url = $uploads_dir['baseurl'] . '/weather-app'; // ReactアプリのベースURL

    // CSSファイルを読み込む
    wp_enqueue_style('weather-app-styles', $base_url . '/static/css/main.1c660692.css', array(), null);

    // JSファイルを読み込む
    wp_enqueue_script('weather-app-scripts', $base_url . '/static/js/main.067c1b69.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_weather_app_assets');


// weather-appのCSSとJSを読み込む
function enqueue_weather_app_assets() {
    $uploads_dir = wp_upload_dir(); // アップロードディレクトリのURLを取得
    $base_url = $uploads_dir['baseurl'] . '/weather-app'; // ReactアプリのベースURL

    // CSSファイルを読み込む
    wp_enqueue_style(
        'weather-app-styles',
        $base_url . '/static/css/main.1c660692.css', // ハッシュ部分は手動更新が必要
        [],
        null
    );

    // JSファイルを読み込む
    wp_enqueue_script(
        'weather-app-scripts',
        $base_url . '/static/js/main.067c1b69.js', // ハッシュ部分は手動更新が必要
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_weather_app_assets');





						<section class="gallery gallery-layout">
							<?php
								// gallery_imageフィールドのデータを取得
								$fields_diving = SCF::get('gallery_image-diving', get_the_ID());

								// $fieldsが空の場合は<section>を出力しない
								if (!empty($fields_diving)) : ?>
							<div class="gallery__inner inner">
								<div class="gallery__heading section-heading">
									<h3 class="section-heading__title">gallery</h3>
									<h2 class="section-heading__subtitle">フォト</h2>
								</div>
								<div class="gallery__content">
									<?php
									// gallery_imageフィールドの中身をループ
									foreach ($fields_diving as $field_diving) {
										// 画像のURLを取得、なければデフォルト画像を指定
										$image_url_diving = $field_diving['gallery_img-diving'] ? wp_get_attachment_url($field_diving['gallery_img-diving']) : esc_url(get_theme_file_uri('/assets/images/gallery1.jpg'));
										?>
									<div class="gallery__item js-modal-open">
										<img src="<?php echo $image_url_diving; ?>" alt="海の中の写真">
									</div>
									<?php
									}
								?>
								</div>
								<!-- 画像のモーダル時のグレー背景 -->
						<div class="gallery__display" id="grayDisplay"></div>
					</div>
					<?php endif;  ?>
					</section>





<section>
	<div class="profile__inner inner">
		<h2 class="info__heading">特定商取引法に基づく表記</h2>
		<div class="business-info c-info">
			<div class="info__item">
				<p class="info__label">販売業者</p>
				<p class="info__content">株式会社umipro</p>
			</div>
			<div class="info__item">
				<p class="info__label">運営統括責任者</p>
				<p class="info__content">服部尚人</p>
			</div>
			<div class="info__item">
				<p class="info__label">所在地</p>
				<p class="info__content">沖縄県石垣市登野城510番地</p>
			</div>

			<div class="info__item">
				<p class="info__label">連絡先</p>
				<p class="info__content">070-8973-0790</p>
				<p class="info__note">
					※原則お電話での問い合わせは受け付けておりません。<br />
					お問い合わせ、ご質問等は下記メールアドレスよりお願いいたします
				</p>
			</div>
			<div class="info__item">
				<p class="info__label">メールアドレス</p>
				<p class="info__content">
					info★umipro.net<br />
					（スパム防止のため★部分を半角@に書き換えて送付ください。）
				</p>
			</div>



		</div>
	</div>
</section>
