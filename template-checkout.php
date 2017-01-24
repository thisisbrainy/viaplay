<?php

/* Template name: Checkout */

get_header(); ?>
<script src="https://use.fontawesome.com/6fac2730d4.js"></script>
	<div id="primary" class="content-area checkout">
		<div class="container">
			<div class="shop-head">
					<h3>Kupongi eest tasumine</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
					<a href="mailto:info@viaplay.ee">info@viaplay.ee</a> või +372 688 80 80
					</p>
			</div><!-- shop head -->
			<div class="checkout-title">
				<h3>Valitud pakett: Viaplay põhipakett -50%</h3>
				<a href="#"><span class="ion-close"></span><span>Eemalda valitud kupong</span></a> 
				<h2>Kehtib kuni: 05.01.2017</h2>
			</div><!-- checkout title -->
			<div class="checkout flexing">
  				<div class="col-1 flex">
				<div class="woocommerce-billing-fields">
					<p class="form-row" id="billing_first_name_field"><input type="email" class="input-text" placeholder="Sinu e-mail*" value=""></p>
					<p class="form-row" id="billing_first_name_field"><input type="email" class="input-text" placeholder="Korda e-mail*" value=""></p>
					<p class="form-row terms wc-terms-and-conditions">
						<div>
            				<input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
            				<label for="checkbox-1" class="checkbox-custom-label">Saada kupong sõbrale</label>
        				</div>
    				</p>
    				<p class="form-row" id="billing_first_name_field"><input type="email" class="input-text" placeholder="Sõbra e-mail*" value=""></p>
					<p class="form-row" id="billing_first_name_field"><input type="email" class="input-text" placeholder="Korda sõbra e-mail*" value=""></p>
					<p class="form-row" id="billing_first_name_field"><textarea type="textarea" class="input-text" placeholder="Personaalne sõnum *" value=""></textarea></p>
				</div>
				</div>
				<div class="col-2 flex">
					<p class="form-row terms wc-terms-and-conditions">
						<div>
            				<input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox">
            				<label for="checkbox-2" class="checkbox-custom-label">Nõustun <a href="/tingimused">tingimustega</a></label>
        				</div>
    				</p>
    				<p>
    				<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Osta kupong" data-value="place order">
    				</p>
				</div>
			</div><!-- checkout -->

			<div id="ostujuhis" class="guide">
					<div class="guide-inner">
						<div class="guide-title">
							<h3>Kuidas kasutada kupongi?</h3>
						</div>
						<div class="step">
							<span class="num">1</span><span>Mine <a href="http://viaplay.ee" target="_blank">viaplay.ee</a> lehele, loo kasutajakonto ning sisesta sooduskupong.</span>
						</div>
						<div class="step">
							<span class="num">2</span><span>Pea meeles - kupong kehtib vaid ühele kontole.</span>
						</div>
						<div class="step">
							<span class="num">3</span><span>Kasuta kupong enne kehtivusaja lõppu (k.a).</span>
						</div>
						<div class="step">
							<span class="num">4</span><span>Küsimustega võta ühendust <a href="mailto:info@viaplay.ee">info@viaplay.ee</a> või +372 688 80 80.</span>
						</div>
					</div>
			</div><!-- guide -->
		</div><!-- container -->
	</div><!-- #primary -->
<?php
get_footer();
