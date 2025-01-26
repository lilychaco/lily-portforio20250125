<?php get_header(); ?>

<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-campaign.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-campaign-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>
	<h2 class="mv__title">
		<?php echo get_the_archive_title(); ?>
	</h2>
</section>
<?php get_template_part('common/breadcrumb'); ?>

<div class="archive-campaign archive-campaign-layout">
	<div class="archive-campaign__inner inner">
		<!-- カテゴリリスト部分 -->
		<ul class="archive-campaign__category-list category-list">
			<li class="category-list__item">
				<!-- ALLカテゴリへのリンク（archive-campaign.phpに戻る） -->
				<a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>"
					class="category-list__link <?php echo (!isset($_GET['term']) || $_GET['term'] == 'all') ? 'is-current' : ''; ?>">
					ALL
				</a>
			</li>
			<?php
					// 'campaign-category'タクソノミーの用語を取得
					$terms = get_terms(array(
							'taxonomy' => 'campaign-category',
							'hide_empty' => false,
					));
					?>
			<?php if (!empty($terms)) : ?>
			<?php foreach ($terms as $term) : ?>
			<li class="category-list__item">
				<!-- タクソノミーのリンクを作成 -->
				<a href="<?php echo esc_url(get_term_link($term)); ?>"
					class="category-list__link <?php echo (isset($_GET['term']) && $_GET['term'] == $term->slug) ? 'is-current' : ''; ?>">
					<?php echo esc_html($term->name); ?>
				</a>
			</li>
			<?php endforeach; ?>
			<?php endif; ?>
		</ul>

		<!-- 投稿リスト部分 -->
		<ul class="archive-campaign__content archive-campaign-cards">

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php
            // 必要なカスタムフィールドの値をまとめて取得
            $link_url = get_post_meta(get_the_ID(), 'link-url', true);
            $thumbnail = get_the_post_thumbnail(
                get_the_ID(),
                'full',
                array('alt' => esc_attr(get_the_title() . 'の画像'))
            );
            $default_thumbnail = get_theme_file_uri('assets/images/campaign1.jpg');
            $terms = get_the_terms(get_the_ID(), 'campaign-category');
            $content = strip_tags(get_the_content()); // HTMLタグを除去
            $trimmed_content = mb_strlen($content, 'UTF-8') > 164
                ? mb_substr($content, 0, 164, 'UTF-8')
                : $content;
            ?>

			<li class="archive-campaign-cards__item archive-campaign-card">
				<?php if ($link_url) : ?>
				<a href="<?php echo esc_url($link_url); ?>" class="archive-campaign-card__link" target="_blank"
					rel="noopener noreferrer">
					<?php endif; ?>

					<figure class="archive-campaign-card__img">
						<?php if ($thumbnail) : ?>
						<!-- サムネイル画像を表示 -->
						<?php echo $thumbnail; ?>
						<?php else : ?>
						<!-- サムネイル画像がない場合はデフォルト画像を表示 -->
						<img src="<?php echo esc_url($default_thumbnail); ?>" alt="デフォルト画像" />
						<?php endif; ?>
					</figure>

					<div class="archive-campaign-card__body">
						<div class="archive-campaign-card__top">
							<?php if (!empty($terms) && !is_wp_error($terms)) : ?>
							<div class="archive-campaign-card__category">
								<?php foreach ($terms as $term) : ?>
								<span><?php echo esc_html($term->name); ?></span>
								<?php endforeach; ?>
							</div>
							<?php endif; ?>
							<div class="archive-campaign-card__title"><?php the_title(); ?></div>
						</div>

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


						<div class="archive-campaign-card__subbody">
							<div class="archive-campaign-card__subtext">
								<?php echo esc_html($trimmed_content); ?>
							</div>
							<div class="archive-campaign-card__meta">
								<div class="archive-campaign-card__microcopy">
									お問い合わせはコチラ
								</div>
								<div class="archive-campaign-card__button">
									<a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Contact us</a>
								</div>
							</div>
						</div>
					</div>

					<?php if ($link_url) : ?>
				</a>
				<?php endif; ?>
			</li>

			<?php endwhile; ?>
			<?php endif; ?>

		</ul>

		<div class="archive-campaign__nav page-nav">
			<ul class="page-nav__pager">
				<?php wp_pagenavi(); ?>
			</ul>
		</div>
	</div>

</div>
</div>

<?php get_footer(); ?>
