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
