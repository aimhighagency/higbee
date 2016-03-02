<?php if($is_front): ?>
	<div id="logo-front"><a href="/"><img src="/<?php echo path_to_theme(); ?>/images/BH-Logo.svg" alt=""></a></div>
<?php endif; ?>
<header id="header-main">
	<div id="inner">
		<div id="logo"><a href="/">Brian Higbee</a></div>
		
		<nav id="nav-main">
			<div id="inner">
				<?php print render($page['nav_main']); ?>
			</div>
		</nav> <!-- END #nav -->

		<div class="menu-toggle icon-list">
		</div>
	</div>
</header>  <!-- END header -->

<div id="content-main">
	<div class="inner">
		<div id="content">
			<?php print render($page['content']); ?>
		</div>
	</div>
</div>

<div id="contact-holder">
	<div class="bg"></div>
	<div class="icon-close"></div>
	<div class="content">
		<div class="inner">
			<div class="about">
				<div class="image">
					<img src="/sites/all/themes/base/images/brian-higbee.jpg" alt="Brian Higbee">
				</div>
				<div class="body">
					<h2>About Brian Higbee</h2>
					<p>Brian comes from an eleven year career in Graphic Design. Early on in his career he picked up a camera and started shooting photos for his commissioned graphic design projects, skateboarding, snowboarding and bands. It soon became obvious that photography held far more appeal than graphic design ever did. So he left home and his comfortable career in pursuit of his passion.</p>

<p>He started his career assisting some of the top photographers in the world. This experience along with his sense of light and space, and compositional capability has propelled him into a creative force.</p>

<p>His talent has been quickly recognized by Interview Magazine. American Vogue, L'Uomo Vogue, Details Mag and many alike, were quick to follow.</p>
					
				</div>
			</div>
			<div class="info">
				<h2>Contact</h2>
			
				<h2>Syndication</h2>
				<h3>CPi Syndication</h3>
				<h3>(212) 500-0990</h3>
				<a href="www.cpi-syndication.com" target="_blank">www.cpi-syndication.com</a>
				<h2>Brian Higbee Studio</h2>
				<a href="studio@brianhigbee.com" target="_blank">studio@brianhigbee.com</a>
				<div class="social-icons">
					<a href="http://instagram.com/brianhigbee" class="icon-instagram" target="_blank"></a>
					<!-- <a href="http://facebook.com/brianhigbee" class="icon-facebook" target="_blank"></a> -->
					<a href="http://twitter.com/brianhigbee" class="icon-twitter" target="_blank"></a>
					<a href="https://www.youtube.com/brianhigbee" class="icon-youtube" target="_blank"></a>
				</div>
			</div>
		</div>
	</div>
</div>
