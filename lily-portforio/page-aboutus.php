<?php get_header(); ?>
<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/rose-greengarden.jpg"
				media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/rose-greengarden.jpg" alt="バラ園のバラ" />
		</picture>
	</figure>
	<h2 class="mv__title">profile</h2>
</section>
<?php get_template_part('common/breadcrumb') ?>

<div class="page-aboutus page-aboutus-layout">
	<div class="page-aboutus__inner inner">
		<div class="page-aboutus__container">
			<div class="page-aboutus__sp-image u-mobile">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/lily-profile.jpg" alt="春風が戦ぐ中、樹のそばに立っているGranLily" />
				<div class=" page-aboutus__title page-aboutus__title--sp u-mobile">
					Gran&nbsp;Lily
				</div>
			</div>
			<div class="page-aboutus__pc-image u-desktop">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/lily-profile-tree.jpg" alt="微笑んでいるGranLily" />
				<img class="with-filter" src="<?php echo get_theme_file_uri(); ?>/assets/images/bali-morning.jpg"
					alt="バリ島朝の海辺" />
			</div>
			<div class="page-aboutus__main-wrapper">
				<div class="page-aboutus__main">
					<div class="page-aboutus__title u-desktop">
						<span>g</span>ran&nbsp;<span>l</span>ily
					</div>
					<div class="page-aboutus__body">
						<div class="page-aboutus__text">
							ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
							ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-aboutus__history"></div>
	</div>
</div>

<section class="top-price top-price-layout" id="price">

	<div class="inner">
		<div class="top-price__inner">
			<div class="top-price__heading section-heading">
				<h3 class="section-heading__title">Profile</h3>
				<h2 class="section-heading__subtitle">プロフィール</h2>
			</div>

			<div class="top-price__main">
				<figure class="top-price__image">
					<picture>
						<source media="(min-width: 768px)"
							srcset="<?php echo get_theme_file_uri(); ?>/assets/images/20211120shimodayuhi.jpg" />
						<img class="fade-in-right" src="<?php echo get_theme_file_uri(); ?>/assets/images/20211120shimodayuhi.jpg"
							alt="天草下田の夕日" />
					</picture>
				</figure>
				<div class="top-price__lists price-lists">
					<div class="price-lists__item price-lists__item--first price-list">
						<div class="price-list__title">基本情報</div>
						<ul class="price-list__items">
							<li class="price-list__item">
								<p class="price-list__number">氏名　</p>
								<p class="price-list__name">中村弓美（なかむらゆみ）</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">年齢　</p>
								<p class="price-list__name">66歳</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">住所地</p>
								<p class="price-list__name">熊本県天草市</p>
							</li>

						</ul>
					</div>

					<div class="price-lists__item price-lists__item--first price-list">
						<div class="price-list__title">職歴</div>
						<ul class="price-list__items">

							<li class="price-list__item">
								<p class="price-list__number">1983年</p>
								<p class="price-list__name">山口大学医学部卒業<br>小児科医となる</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">1988年</p>
								<p class="price-list__name">相方のふるさと天草へ転居<br>
									重症心身障害児者施設勤務</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">2004年</p>
								<p class="price-list__name">中村こども・内科クリニック勤務</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">2006年</p>
								<p class="price-list__name">十万山クリニック開院</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">2020年</p>
								<p class="price-list__name">Web制作学習開始</p>
							</li>
						</ul>
					</div>
					<div class="price-lists__item price-list">
						<div class="price-list__title">家族歴</div>
						<ul class="price-list__items">
							<li class="price-list__item">
								<p class="price-list__number">1958年</p>
								<p class="price-list__name">福岡県北九州市に生まれる</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">1985年</p>
								<p class="price-list__name">結婚</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">1986年</p>
								<p class="price-list__name">長女誕生</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">1987年</p>
								<p class="price-list__name">長男誕生</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">1989年</p>
								<p class="price-list__name">次女誕生</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">1990年</p>
								<p class="price-list__name">次男誕生</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">2020年</p>
								<p class="price-list__name">長男病死</p>
							</li>
						</ul>
					</div>
					<div class="price-lists__item price-list">
						<div class="price-list__title">連絡先</div>
						<ul class="price-list__items">
							<li class="price-list__item">
								<p class="price-list__number">メール </p>
								<p class="price-list__name">granlily2023@gmail.com</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">LINE　</p>
								<p class="price-list__name"><a href="https://lin.ee/Ad4QFH2">https://lin.ee/Ad4QFH2</a></p>
							</li>
							<li class="price-list__item">
								<p class="price-list__number">Twitter</p>
								<p class=" price-list__name"><a href="https://x.com/lilychaco">https://x.com/lilychaco</a></p>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>




<?php get_footer(); ?>
