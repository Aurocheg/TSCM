<footer class="footer">
	<div class="footer__main">
		<ul class="container">
			<li class="footer__about" data-aos="fade-up"
			    data-aos-duration="800">
				<div class="footer__logo">
					<?php the_custom_logo(); ?>
				</div>
				<p><?php the_field('footer_about', 2); ?></p>
				<a href="#" class="footer__more">
					Read More
					<svg display="none">
						<symbol viewBox="0 0 512 512" id="arrow__right">
							<g>
								<path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"/>
							</g>
						</symbol>
					</svg>
					<svg>
						<use href="#arrow__right"></use>
					</svg>
				</a>
			</li>
			<li class="footer__links" data-aos="fade-up" data-aos-duration="800">
				<h2 class="footer__title">Shortcuts</h2>
				<ul class="footer__links-container">
					<li><a href="#">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Catalog</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
			</li>
			<li class="footer__latest" data-aos="fade-up"
			    data-aos-duration="800">
				<h2 class="footer__title">Latest News</h2>
				<ul class="footer__news">
					<li class="footer__post">
						<picture>
							<source srcset="<?php echo bloginfo('template_url');?>/assets/img/pictures/post-img.webp" type="image/webp">
							<img src="<?php echo bloginfo('template_url');
							?>/assets/img/pictures/post-img.png" alt="post">
						</picture>
						<div class="footer__post-container">
							<h3>Lorem Security the men sefty</h3>
						</div>
					</li>
					<li class="footer__post">
						<picture>
							<source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/pictures/post-img.webp" type="image/webp">
							<img src="<?php echo bloginfo('template_url'); ?>/assets/img/pictures/post-img.png" alt="post">
						</picture>
						<div class="footer__post-container">
							<h3>Lorem Security the men sefty</h3>
						</div>
					</li>
				</ul>
			</li>
			<li class="footer__contact" data-aos="fade-up"
			    data-aos-duration="800">
				<h2 class="footer__title">Contact us</h2>
				<div class="footer__info">
					<a href="#" class="footer__geolocation">
						<svg display="none">
							<symbol id="location" viewBox="0 0 477.883 477.883">
								<g>
									<path d="M468.456,1.808c-4.811-2.411-10.478-2.411-15.289,0l0,0L9.433,223.675c-8.429,4.219-11.842,14.471-7.624,22.9c2.401,4.798,6.919,8.188,12.197,9.151l176.111,32.034l32.034,176.111c1.311,7.219,7.091,12.793,14.353,13.841c0.803,0.116,1.613,0.173,2.423,0.171c6.469,0.003,12.383-3.651,15.275-9.438L476.07,24.711C480.292,16.284,476.883,6.03,468.456,1.808z M246.557,407.38l-24.986-137.353c-1.292-6.936-6.718-12.362-13.653-13.653L70.498,231.32L422.634,55.244L246.557,407.38z"/>
								</g>
							</symbol>
						</svg>
						<svg>
							<use href="#location"></use>
						</svg>
						<span><?php the_field('company_location', 2); ?></span>
					</a>
					<a href="tel:+651800123145">
						<svg display="none">
							<symbol id="tel" viewBox="0 0 513.64 513.64">
								<g>
									<path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"/>
								</g>
							</symbol>
						</svg>
						<svg>
							<use href="#tel"></use>
						</svg>
						<span><?php the_field('company_number', 2); ?></span>
					</a>
					<a href="#" class="footer__email">
						<svg display="none">
							<symbol id="email" viewBox="0 0 512 512">
								<g>
									<path d="M467,76H45C20.137,76,0,96.262,0,121v270c0,24.885,20.285,45,45,45h422c24.655,0,45-20.03,45-45V121C512,96.306,491.943,76,467,76z M460.698,106c-9.194,9.145-167.415,166.533-172.878,171.967c-8.5,8.5-19.8,13.18-31.82,13.18s-23.32-4.681-31.848-13.208C220.478,274.284,64.003,118.634,51.302,106H460.698z M30,384.894V127.125L159.638,256.08L30,384.894z M51.321,406l129.587-128.763l22.059,21.943c14.166,14.166,33,21.967,53.033,21.967c20.033,0,38.867-7.801,53.005-21.939l22.087-21.971L460.679,406H51.321z M482,384.894L352.362,256.08L482,127.125V384.894z"/>
								</g>
							</symbol>
						</svg>
						<svg>
							<use href="#email"></use>
						</svg>
						<span><?php the_field('company_mail', 2); ?></span>
					</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="footer__bottom">
		<div class="container">
			<div class="footer__bottom-info">© 2021 <span><?php the_field('company_name', 2); ?></span></div>
			<div class="header__social">
				<a href="#" class="header__facebook header__icon">
					<svg>
						<use href="#facebook"></use>
					</svg>
				</a>
				<a href="#" class="header__twitter header__icon">
					<svg>
						<use href="#twitter"></use>
					</svg>
				</a>
				<a href="#" class="header__telegram header__icon">
					<svg>
						<use href="#telegram"></use>
					</svg>
				</a>
				<a href="#" class="header__whatsapp header__icon">
					<svg>
						<use href="#whatsapp"></use>
					</svg>
				</a>
				<a href="#" class="header__instagram header__icon">
					<svg>
						<use href="#instagram"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>