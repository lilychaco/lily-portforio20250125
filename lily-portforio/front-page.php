<?php get_header(); ?>

<section class="fv fv-layout js-fv">
	<div class="fv__video-container">
		<video autoplay muted loop playsinline preload="auto">
			<source src="<?php echo get_template_directory_uri(); ?>/assets/images/manta.MP4" type="video/mp4">
			お使いのブラウザは動画に対応していません。
		</video>
	</div>


	<div class="fv__copy">
		<h2 class="fv__main-title">GranLily</h2>
		<p class="fv__sub-title">into&nbsp;the&nbsp;WEB&nbsp;World
		</p>
	</div>
</section>

<section class="top-works top-works-layout" id="works">
	<?php
				// カスタム投稿「works」を取得するためのWP_Query
				$args = [
		    'post_type' => 'works', // カスタム投稿タイプ「works」を指定
  		  'posts_per_page' => -1, // 全ての投稿を取得（必要に応じて数を変更）
				];

				$works_query = new WP_Query($args);
				if ($works_query->have_posts()) :
				?>

	<div class="top-works__inner inner">
		<div class="top-works__heading section-heading">
			<h3 class="section-heading__title">Works</h3>
			<h2 class="section-heading__subtitle">制作物</h2>
		</div>

		<!-- 前後の矢印 -->
		<div class="swiper-button custom-swiper-button-prev"></div>
		<div class="swiper-button custom-swiper-button-next"></div>

		<div class="top-works__cards-wrapper swiper js-works-swiper">
			<ul class="top-works__cards works-cards swiper-wrapper">
				<?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
				<?php
        // 必要なカスタムフィールドの値をまとめて取得
        $link_url = get_post_meta(get_the_ID(), 'link-url', true);
        $user_name = get_post_meta(get_the_ID(), 'user-name', true);
        $password = get_post_meta(get_the_ID(), 'password', true);
        $thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_theme_file_uri('assets/images/works1.jpg');
        $terms = get_the_terms(get_the_ID(), 'works-category');
        ?>
				<li class="works-cards__item works-card swiper-slide p-swiper__slide">
					<?php if ($link_url) : ?>
					<a href="<?php echo esc_url($link_url); ?>" class="works-card__link" target="_blank"
						rel="noopener noreferrer">
						<?php endif; ?>
						<figure class="works-card__img p-swiper__img">
							<img src="<?php echo esc_url($thumbnail_url); ?>"
								alt="<?php echo has_post_thumbnail() ? esc_attr(get_the_title()) : 'デフォルト画像'; ?>" />
						</figure>
						<div class="works-card__body p-swiper__body">
							<div class="works-card__top">
								<?php if (!empty($terms) && !is_wp_error($terms)) : ?>
								<div class="works-card__category">
									<?php foreach ($terms as $term) : ?>
									<span><?php echo esc_html($term->name); ?></span>
									<?php endforeach; ?>
								</div>
								<?php endif; ?>
								<div class="works-card__title"><?php the_title(); ?></div>
							</div>
							<div class="works-card__text">
								<?php if ($link_url) : ?>
								<p class="works-card__price-info">クリックしたらサイトへ飛びます</p>
								<?php endif; ?>
								<?php if (!empty($user_name) || !empty($password)) : ?>
								<p class="works-card__price-info">
									<?php if (!empty($user_name)) : ?>
									ユーザー名: <?php echo esc_html($user_name); ?><br>
									<?php endif; ?>
									<?php if (!empty($password)) : ?>
									パスワード: <?php echo esc_html($password); ?>
									<?php endif; ?>
								</p>
								<?php endif; ?>
							</div>
						</div>
						<?php if ($link_url) : ?>
					</a>
					<?php endif; ?>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="top-works__button">
			<a href="<?php echo esc_url(home_url('/works')); ?>" class="button">View&nbsp;more</a>
		</div>
	</div>

	<?php endif  ?>
	<?php wp_reset_postdata(); // クエリのリセット  ?>
</section>

<section class="top-aboutus inner top-aboutus-layout" id="aboutus">
	<div class="top-aboutus__heading section-heading">
		<h3 class="section-heading__title">Profile</h3>
		<h2 class="section-heading__subtitle">プロフィール</h2>
	</div>
	<div class="top-aboutus__container">
		<div class="top-aboutus__sp-image u-mobile">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/lily-profile-sp.jpg" alt="中村弓美" />
		</div>
		<div class="top-aboutus__pc-image u-desktop">
			<div class="top-aboutus__pc-image-item top-aboutus__pc-image-item--primary">
				<div class="with-filter">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/hondo-view-pc.jpg" alt="本渡全景" />
				</div>
			</div>
			<div class="top-aboutus__pc-image-item top-aboutus__pc-image-item--secondary">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/lily-profile-long.jpg" alt="中村弓美" />
			</div>
		</div>
		<div class="top-aboutus__main-wrapper">
			<div class="top-aboutus__main">
				<div class="top-aboutus__title">
					<span>g</span>ran&nbsp;<span>l</span>ily
				</div>
				<div class="top-aboutus__body">
					<div class="top-aboutus__text">
						はじめまして。GranLily 代表の中村弓美と申します。開業18年の小児科医ですが、コーダーとしてWEB制作のお仕事をしています。
						コロナ禍で自院の来客が激減した時、危機感を持ち、プログラミングの学習を始めました。
					</div>
					<div class="top-aboutus__button">
						<a href="<?php echo esc_url(home_url('/aboutus')); ?>" class="button"> View more </a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="top-information top-information-layout" id="information">
	<div class="top-information__inner inner">
		<div class="top-information__heading section-heading">
			<h3 class="section-heading__title">hobby</h3>
			<h2 class="section-heading__subtitle">趣味</h2>
		</div>
		<div class="top-information__main">
			<figure class="top-information__image colorbox">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/kumanomi-mure.jpg" alt="黄色い魚の写真" />
			</figure>
			<div class="top-information__body">
				<div class="top-information__top">
					<div class="top-information__title">スキューバダイビング</div>
					<div class="top-information__text">
						還暦を目前に控えて、泳げないけど、スキューバダイビングのライセンスを取りました。海の中は広く異次元の世界。まるで宇宙空間を旅している様です。地元天草の海をはじめ、沖縄、石垣島、与那国島、奄美大島、タイ、インドネシア、フィリピン、モルジブの海でも潜りました。

					</div>
				</div>
				<div class="top-information__button">
					<a href="<?php echo esc_url(home_url('/information')); ?>" class="button"> View more </a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="top-blog top-blog-layout" id="blog">
	<?php
			// カスタムクエリの設定
			$args = array(
				'posts_per_page' => 3, // 表示する投稿数を指定
			);
			$query = new WP_Query($args);
				if ($query->have_posts()) :
		?>

	<div class="top-blog__inner inner">

		<div class="top-blog__heading section-heading">
			<h3 class="section-heading__title section-heading__title--top-blog">
				Blog
			</h3>
			<h2 class="section-heading__subtitle section-heading__subtitle--top-blog">
				ブログ
			</h2>
		</div>
		<ul class="top-blog__cards blog-cards">
			<?php
			while ($query->have_posts()) : $query->the_post();
			?>
			<li class="blog-cards__item blog-card">
				<a href="<?php the_permalink(); ?>" class="blog-card__link">
					<figure class="blog-card__img">
						<?php
								// アイキャッチ画像のHTMLを取得して変数に格納
								$thumbnail = get_the_post_thumbnail(
										get_the_ID(),
										'full',
										array('alt' => esc_attr(get_the_title() . 'の画像'))
								);
								?>
						<?php if ($thumbnail) : ?>
						<!-- サムネイル画像が設定されている場合 -->
						<?php echo $thumbnail; ?>
						<?php else : ?>
						<!-- サムネイル画像がない場合、デフォルト画像を表示 -->
						<img src="<?php echo esc_url(get_theme_file_uri('assets/images/no-image.jpg')); ?>"
							alt="No image available" />
						<?php endif; ?>
					</figure>


					<div class="blog-card__body">
						<div class="blog-card__top">
							<!-- 投稿日時の表示 -->
							<time datetime="<?php echo esc_attr(get_the_time('c')); ?>" class="blog-card__date">
								<?php echo esc_html(get_the_date('Y.m/d')); ?>
							</time>
							<div class="blog-card__title"><?php the_title(); ?></div>
						</div>
						<div class="blog-card__text">
							<?php
            // 本文を取得し、HTMLタグを除去、86文字に制限して表示
            $content = strip_tags( get_the_content() ); // HTMLタグを除去
            $trimmed_content = mb_strlen( $content, 'UTF-8' ) > 86
                ? mb_substr( $content, 0, 86, 'UTF-8' ) . ''
                : $content; // 86文字に切り詰め、省略記号を追加
            echo esc_html( $trimmed_content ); // エスケープして表示
            ?>
						</div>
					</div>
				</a>
			</li>
			<?php endwhile;?>
		</ul>

		<div class="top-blog__button">
			<a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">View more</a>
		</div>
	</div>
	<?php endif; ?>
	<?php wp_reset_postdata(); // クエリのリセット  ?>
</section>

<?php get_footer(); ?>
