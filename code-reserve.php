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
