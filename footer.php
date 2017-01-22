	</div><!-- #content -->
	<div class="store">
		<div class="container">
			<span><?php the_field('text','option'); ?></span><a href="<?php the_field('apple', 'option'); ?>" target="_blank"><button class="gray"><img src="<?php bloginfo('template_directory'); ?>/img/apple.png">App Store</button></a><a href="<?php the_field('google', 'option'); ?>" target="_blank"><button class="gray"><img src="<?php bloginfo('template_directory'); ?>/img/android.png">Google Play</button></a>
			<span><a id="back-top"><button>Tagasi üles</button></a></span>
		</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container footer">
		<div class="box">
			<div class="box-inner">
			<div class="widget-area">
				<div class="widget-box">
					<?php echo do_shortcode( "[cwa id='footer-1']" ); ?>
				</div>
			</div><!-- widget - area -->
			</div><!-- box-inner -->
		</div><!-- start -->
		<div class="box">
			<div class="box-inner">
			<div class="widget-area">
				<div class="widget-box">
					<?php echo do_shortcode( "[cwa id='footer-2']" ); ?>
				</div>
			</div><!-- widget - area -->
			</div><!-- box-inner -->
		</div><!-- middle -->
		<div class="box">
			<div class="box-inner">
			<div class="widget-area">
				<div class="widget-box">
					<?php echo do_shortcode( "[cwa id='footer-3']" ); ?>
				</div>
			</div><!-- widget - area -->
			</div><!-- box-inner -->
		</div><!-- middle -->
		<div class="box">
			<div class="box-inner">
			<div class="widget-area">
				<div class="widget-box">
					<?php echo do_shortcode( "[cwa id='footer-4']" ); ?>
				</div>
			</div><!-- widget - area -->
			</div><!-- box-inner -->
		</div><!-- middle -->
		<div class="box">
			<div class="box-inner">
			<div class="widget-area">
				<div class="widget-box">
					<?php echo do_shortcode( "[cwa id='footer-5']" ); ?>
				</div>
			</div><!-- widget - area -->
			</div><!-- box-inner -->
		</div><!-- middle -->
		<div class="box">
			<div class="box-inner">
			<div class="widget-area">
				<div class="widget-box">
					<?php echo do_shortcode( "[cwa id='footer-6']" ); ?>
				</div>
			</div><!-- widget - area -->
			</div><!-- box-inner -->
		</div><!-- end -->

		</div><!-- container -->
	</footer><!-- #colophon -->
		<div class="sub-footer">
			<div class="container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="footer-logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
				<span>© 2016 Viasat AS. All rights reserved</span><span>Powered by</span><img src="<?php bloginfo('template_directory'); ?>/img/mtg.png">
			</div>
		</div>
</div><!-- #page -->
 <script>
  if ($('#back-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}
  </script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollTo.js"></script>
<!-- nav -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.nav.js"></script>
<script>
jQuery(document).ready(function() {
  jQuery('#primary-menu').onePageNav();
  });
</script>
<script>
$("#homebtn, #shopbtn, a[href="#voucherid"]").click(function() {
    $('html, body').animate({
        scrollTop: $("#voucherid").offset().top
    }, 500);
});
</script>
<?php wp_footer(); ?>

</body>
</html>
