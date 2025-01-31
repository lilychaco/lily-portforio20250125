			<aside class="side">
				<section class="side-popular">
					<?php
						$popular_posts = get_popular_posts(3); // 人気記事を3件取得

						if ($popular_posts->have_posts()) : ?>
					<h2 class="side-popular__heading side-heading">人気記事</h2>
					<ul class="side-popular__cards">
						<?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
						<li class="side-popular__card popular-card">
							<!-- 投稿のURLを取得し、カード全体をリンクとして包む -->
							<a href="<?php echo esc_url(get_permalink()); ?>" class="popular-card__link">
								<div class="popular-card__img">
									<?php
											// アイキャッチ画像のHTMLを取得して変数に格納
											$thumbnail = get_the_post_thumbnail(
													get_the_ID(),
													'thumbnail',
													array('alt' => esc_attr(get_the_title() . 'のサムネイル画像'))
											);
											?>
									<?php if ($thumbnail) : ?>
									<!-- アイキャッチ画像がある場合 -->
									<?php echo $thumbnail; ?>
									<?php else : ?>
									<!-- アイキャッチ画像がない場合、デフォルト画像を表示 -->
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/default.jpg')); ?>" alt="デフォルト画像" />
									<?php endif; ?>
								</div>
								<div class="popular-card__body">
									<!-- 投稿日時の表示 -->
									<time datetime="<?php echo esc_attr(get_the_time('c')); ?>" class="blog-card__date">
										<?php echo esc_html(get_the_date('Y.m/d')); ?>
									</time>
									<p class="popular-card__title"><?php the_title(); ?></p>
								</div>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</section>


				<section class="side-works">
					<?php
							// 最新のキャンペーン情報を取得
							$latest_works_args = array(
								'post_type' => 'works', // カスタム投稿タイプが 'works' であることを指定
								'posts_per_page' => 2,  // 2件のみ取
								'orderby' => 'date',    // 日付順で取得
								'order' => 'DESC'       // 降順で取得
							);

							$latest_works_query = new WP_Query($latest_works_args);

							if ($latest_works_query->have_posts()) : ?>
					<h2 class="side-works__heading side-heading">制作物</h2>
					<ul class="side-works__items">
						<?php while ($latest_works_query->have_posts()) : $latest_works_query->the_post(); ?>

						<li class="side-works__item">
							<figure class="side-works__img">
								<?php
								// サムネイルのURLを変数に格納
								$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'full') : get_theme_file_uri('/assets/images/works1.jpg');
								// altテキストを設定
								$alt_text = has_post_thumbnail() ? get_the_title() : 'キャンペーンの画像';
								?>
								<img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($alt_text); ?>" />
							</figure>
							<div class="side-works__body">
								<div class="side-works__top">
									<div class="side-works__title"><?php the_title(); ?>
									</div>
								</div>
								<div class="side-works__text">
									<div class="side-works__price">
										<?php if (!empty($price_old)) : ?>
										<p class="side-works__price-before">
											&yen;<?php echo esc_html(number_format($price_old)); ?>
										</p>
										<?php endif; ?>
										<?php if (!empty($price_new)) : ?>
										<p class="side-works__price-after">
											&yen;<?php echo esc_html(number_format($price_new)); ?>
										</p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
					<div class="side-works__button">
						<a href="<?php echo esc_url(home_url('/works')); ?>" class="button">View&nbsp;more</a>
					</div>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</section>

				<section class="side-archive">
					<?php
						global $wpdb;

						// 投稿データを年と月ごとに取得する関数
						function get_yearly_monthly_archive_data() {
								global $wpdb;

								// 年月ごとに投稿データを取得
								$results = $wpdb->get_results("
										SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month, COUNT(ID) as post_count
										FROM {$wpdb->posts}
										WHERE post_type = 'post' AND post_status = 'publish'
										GROUP BY year, month
										ORDER BY year DESC, month DESC
								");

								// データを配列に整形
								$years = [];
								foreach ($results as $result) {
										$years[$result->year][] = [
												'month' => $result->month,
												'post_count' => $result->post_count,
												'url' => get_month_link($result->year, $result->month),
													];
											}
											return $years;
									}

									// データ取得
									$archives = get_yearly_monthly_archive_data();

									// 投稿がある場合のみアーカイブセクションを表示
									if (!empty($archives)) :
									?>

					<h2 class="side-archive__heading side-heading">アーカイブ</h2>
					<div class="side-archive__contents">
						<?php foreach ($archives as $year => $months): ?>
						<div class="side-archive__year" data-year="<?php echo esc_html($year); ?>">
							<!-- 年ごとのトグル -->
							<div class="side-archive__year-toggle js-year-toggle">
								<?php echo esc_html($year); ?>
							</div>
							<!-- 月ごとのリスト -->
							<div class="side-archive__month-list">
								<?php foreach ($months as $month): ?>
								<div class="side-archive__month">
									<a href="<?php echo esc_url($month['url']); ?>" class="side-archive__link">
										<?php echo esc_html($month['month']); ?>月 (<?php echo esc_html($month['post_count']); ?>件)
									</a>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</section>

			</aside>
