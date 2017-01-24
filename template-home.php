<?php
/*
	Template name: Home
*/
get_header(); ?>
	<div id="primary" class="content-area">
		<?php if( get_field('vimeo') ): ?>
		<div class="main video-main">
		<div class="videoplayer">
        <div class="video-wrap">
          <div id="thumbnail" class="hover-zoom" style="background: url('<?php the_field('img'); ?>') no-repeat;"></div>
          <div id="iframe" class="fluidVideoWrapper">
            <iframe src="//player.vimeo.com/video/<?php the_field('vimeo'); ?>?api=1" width="100%" height="auto" frameborder="0" id="video"></iframe>
          </div>
        </div>
        <div class="buttons" id="buttons">
            <div class="button" id="play-button">
            	<span class="ion-ios-play-outline"></span>
            </div>
        	<div class="text" id="text">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<h3><?php the_field('h2'); ?></h3>
					<a href="#voucherid" id="homebtn"><button>Osta kupong</button></a>
			</div>
        </div>
        <div class="button" id="pause-button">
            <span class="ion-android-close"></span>
        </div>
      	</div>
      	<!-- .videoplayer -->
		</div><!-- main w videoplayer -->
		<?php else: ?>
		<div class="main hover-zoom" style="background-image:url('<?php the_field('img'); ?>');"></div>
		<?php endif; ?>
		<div class="container tabs desktop">
		<?php if( get_field('vimeo') ): ?>
		<!-- empty -->
		<?php else: ?>
			<div class="text" id="text">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<h3><?php the_field('h2'); ?></h3>
					<a href="<?php the_field('btn'); ?>" target="_blank"><button><?php the_field('btn_txt'); ?></button></a>
			</div>
		<?php endif; ?>
		</div><!-- container -->
		<div id="shop">
			<div class="container">
				<div class="shop-head">
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacinia sapien quam, nec lacinia augue condimentum sit amet.</h3>
				</div>
				<div class="shop-module" id="voucherid">
					<div class="package-wrap">
						<div class="title">
							<h3>Basic package</h3>
						</div>
					<div class="vouchers flexing">

						<?php	if($via_products->have_posts()): while($via_products->have_posts()): $via_products->the_post(); $via_prod = wc_get_product(get_the_ID()); ?>

						<div class="flex product-box">
							<div class="info">
								<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
								<h4><?php the_title(); ?></h4>
								<h5><?php if($via_prod->get_price() == 0): echo __('TASUTA'); else: echo $via_prod->get_price(); endif; ?></h5>
								<div class="valid">
									<p>Kehtib kuni: <?php echo get_post_meta(get_the_ID(), '_product_attributes')[0]['kehtib-kuni']['value']; ?></p>
								</div>
							</div>
							<a href="<?php echo home_url('/checkout/'); ?>?add-to-cart=<?php echo get_the_ID(); ?>"><button>Osta Kupong</button></a>
						</div><!-- .flex -->

						<?php endwhile; endif; wp_reset_postdata(); ?>

					</div><!-- vouchers -->
					</div><!-- package-wrap -->

					<div class="package-wrap">
						<div class="title">
							<h3>Basic package</h3>
						</div>
					<div class="vouchers flexing">
						<div class="flex product-box">
							<div class="info">
								<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
								<h4>Proovi 2 kuud põhipaketti</h4>
								<h5>TASUTA</h5>
								<div class="valid">
									<p>Kehtib kuni: 01.05.2017</p>
								</div>
							</div>
							<a href="#" target="_blank"><button>Osta Kupong</button></a>
						</div><!-- .flex -->

						<div class="flex product-box">
							<div class="info">
								<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
								<h4>Proovi 2 kuud põhipaketti</h4>
								<h5>TASUTA</h5>
								<div class="valid">
									<p>Kehtib kuni: 01.05.2017</p>
								</div>
							</div>
							<a href="#" target="_blank"><button>Osta Kupong</button></a>
						</div><!-- .flex -->

						<div class="flex product-box">
							<div class="info">
								<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
								<h4>Proovi 2 kuud põhipaketti</h4>
								<h5>TASUTA</h5>
								<div class="valid">
									<p>Kehtib kuni: 01.05.2017</p>
								</div>
							</div>
							<a href="#" target="_blank"><button>Osta Kupong</button></a>
						</div><!-- .flex -->

						<div class="flex product-box">
							<div class="info">
								<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
								<h4>Proovi 2 kuud põhipaketti</h4>
								<h5>TASUTA</h5>
								<div class="valid">
									<p>Kehtib kuni: 01.05.2017</p>
								</div>
							</div>
							<a href="#" target="_blank"><button>Osta Kupong</button></a>
						</div><!-- .flex -->
					</div><!-- vouchers -->
					</div><!-- package-wrap -->

					<div id="ostujuhis" class="guide">
					<div class="guide-inner">
						<div class="guide-title">
							<h3>Kuidas osta ja kasutada kupongi?</h3>
						</div>
						<div class="step">
							<span class="num">1</span><span>Leia sobiv kupong ning lisa see ostukorvi.</span>
						</div>
						<div class="step">
							<span class="num">2</span><span>Ostukorvis sisesta enda andmed ning tasu koheselt pangalingiga.</span>
						</div>
						<div class="step">
							<span class="num">3</span><span>Ostes kupong kingitusena sõbrale sisesta sõbra andmed.</span>
						</div>
						<div class="step">
							<span class="num">4</span><span>Kupong saabub ostukorvis sisestatud e-mailile peale makse kinnitamist.</span>
						</div>
						<div class="step">
							<span class="num">5</span><span>Mine <a href="http://viaplay.ee" target="_blank">viaplay.ee</a> lehele, loo kasutajakonto ning sisesta sooduskupong.</span>
						</div>
					</div>
				</div><!-- guide -->

				<div class="payment">
					<div class="title">
						<h3>Makseviisid</h3>
						<p>Lorem ipsum dolor sit amet, consectetur<br/>adipiscing elit. Fusce lacinia sapien quam.</p>
					</div>
					<div class="flexing payments">
						<div class="flex">
							<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
						</div>
						<div class="flex">
							<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
						</div>
						<div class="flex">
							<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
						</div>
						<div class="flex">
							<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
						</div>
						<div class="flex">
							<img src="<?php bloginfo('template_directory'); ?>/img/viaplay_icon.svg">
						</div>
					</div>
				</div><!-- payment -->

				</div><!-- shop-module -->
			</div><!-- container -->
		</div><!-- #shop -->
		<div class="cta">
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
			<a href="#voucherid" id="homebtn"><button>Osta kupong</button></a>
		</div>
		</div><!-- container -->
	</div><!-- #primary -->
  <script>
$(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
});
</script>
  <script>
  $( function() {
    $( "#tabs" ).tabs({collapsible: true, active: false });
  } );
    $( function() {
    $( "#tabs2" ).tabs({collapsible: true, active: false });
  } );
  </script>
  <script>
$(document).ready(function () {
    $('.widget').on('click', function () {  //  here $(this) is refering to document
        $(this).find('.menu').toggleClass('show');
    });
});
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/TweenMax.min.js"></script>
<script>
$(document).mousemove(function(event){

		var x = (event.clientX/$(window).width())-0.5;
		var y = (event.clientY/$(window).height())-0.5;

		TweenLite.to($('.hover-zoom'), 0.6, {
      rotationY:3.5*x,
      rotationX:3.5*y,
      ease:Power1.easeOut,
      transformPerspective:950,
      transformOrigin:"center"
    });

	});
</script>
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<script>
var iframe = document.getElementById('video');

// $f == Froogaloop
var player = $f(iframe);
var cover = document.getElementById('thumbnail');

// bind events
var playButton = document.getElementById("play-button");
playButton.addEventListener("click", function() {
  player.api("play");
  player.api('setVolume', 1);
});

var pauseButton = document.getElementById("pause-button");
pauseButton.addEventListener("click", function() {
  player.api("pause");
});
playButton.addEventListener("click", function() {
 document.getElementById('thumbnail').style.display = 'none';
 document.getElementById('buttons').style.display = 'none';
 $('#play-button').hide(0);
 $('#pause-button').show(0);
});
pauseButton.addEventListener("click", function() {
  document.getElementById('thumbnail').style.display = 'block';
   document.getElementById('buttons').style.display = 'block';
   $('#play-button').show(0);
   $('#pause-button').hide(0);
});
  </script>
<?php
get_footer();
