   <?php if (!is_page(array('contact', 'thanks', 'error')) && !is_404()): ?>

   <div class="contact-wrapper">
   	<section class="contact inner" id="contact">
   		<div class="contact__inner">
   			<div class="contact__container">
   				<div class="contact__item contact-maparea">
   					<div class="contact-maparea__top">
   						<div class="contact-maparea__logo">
   							<a href="<?php echo esc_url(home_url('/')); ?>">
   								<picture>
   									<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/logo-granlily-white.jpg"
   										media="(min-width: 768px)" />
   									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo-granlily-white.jpg" alt="ロゴ" />
   								</picture>
   							</a>
   						</div>
   					</div>
   					<div class="contact-maparea__body">
   						<div class="contact-maparea__address">
   							<p>熊本県天草市</p>
   						</div>
   						<div class="contact-maparea__map-wrapper">
   							<div class="contact-maparea__map">
   								<iframe
   									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3366.253199136158!2d130.19879781044517!3d32.465918773685914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353fee47338102ad%3A0x9926804e245c3645!2z44CSODYzLTAwMDEg54aK5pys55yM5aSp6I2J5biC5pys5rih55S65bqD54Cs77yV4oiS77yR77yR77yY!5e0!3m2!1sja!2sjp!4v1738158198270!5m2!1sja!2sjp"
   									width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
   									referrerpolicy="no-referrer-when-downgrade"></iframe>
   							</div>
   						</div>
   					</div>
   				</div>
   				<div class="contact__item contact-verticalline"></div>

   				<div class="contact__item contact__cta">
   					<div id="weather-app-container">
   						<div id="root"></div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</section>
   </div>
   <?php endif; ?>


   <footer class="footer footer-layout">
   	<div class="footer__inner inner">
   		<div class="footer__top">
   			<div class="footer__logo">
   				<a href="<?php echo esc_url(home_url('/')); ?>">
   					<picture>
   						<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/logo-granlily-transparent.png"
   							media="(min-width: 768px)" />
   						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo-granlily-transparent.png" alt="ロゴ" />
   					</picture>
   				</a>
   			</div>
   			<div class="footer__sns">
   				<a href="https://www.facebook.com/yumin.amakusa?locale=ja_JP" target=”_blank”><img
   						src="<?php echo get_theme_file_uri(); ?>/assets/images/facebooklogo.png" alt="フッター" /></a>
   				<a href="https://www.instagram.com/yumin52/" target=”_blank”><img
   						src="<?php echo get_theme_file_uri(); ?>/assets/images/instagramlogo.png" alt="フッターロゴ" /></a>
   			</div>
   		</div>
   		<div class="footer__nav nav-menu">
   			<!-- ブロック1 -->
   			<div class="nav-menu__box nav-menu__box--01 nav-menu__box--footer">
   				<div class="nav-menu__item">
   					<a href="<?php echo esc_url(home_url('/works')); ?>">
   						<p class="starfish-icon">制作物</p>
   					</a>
   				</div>
   				<div class="nav-menu__item nav-menu__item--01">
   					<a href="<?php echo esc_url(home_url('/aboutus')); ?>">
   						<p class="starfish-icon">プロフィール</p>
   					</a>
   				</div>
   			</div>

   			<div class="nav-menu__box nav-menu__box--02">
   				<div class="nav-menu__item">
   					<a href="<?php echo esc_url(home_url('/information')); ?>">
   						<p class="starfish-icon">趣味</p>
   					</a>
   				</div>
   				<div class="nav-menu__item nav-menu__item--01">
   					<a href="<?php echo esc_url(home_url('/blog')); ?>">
   						<p class="starfish-icon">ブログ</p>
   					</a>
   				</div>
   			</div>

   			<!-- ブロック4 -->
   			<div class="nav-menu__box nav-menu__box--06">
   				<div class="nav-menu__item">
   					<a href="<?php echo esc_url(home_url('/faq')); ?>">
   						<p class="starfish-icon">よくある質問</p>
   					</a>
   				</div>
   				<div class="nav-menu__item">
   					<a href="<?php echo esc_url(home_url('/contact')); ?>">
   						<p class="starfish-icon">お問い合わせ</p>
   					</a>
   				</div>

   			</div>
   		</div>
   		<div class="footer__copyright">
   			©&nbsp;2025&nbsp;GranLily&nbsp;LLC.
   		</div>
   	</div>

   	<?php if ( ! is_404() ) : ?>
   	<div class="footer__button page-top-button js-page-top-button">
   		<div class="page-top-button__img">
   			<picture>
   				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/totop-button.png" alt="上に戻るボタン" />
   			</picture>
   		</div>
   	</div>
   	<?php endif; ?>
   </footer>
   <?php wp_footer(); ?>
   </body>

   </html>
