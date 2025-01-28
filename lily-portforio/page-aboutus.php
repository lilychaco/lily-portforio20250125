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
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/bali-morning.jpg" alt="バラ園のピンクのばら達" />
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
	</div>
</div>




<?php get_footer(); ?>
