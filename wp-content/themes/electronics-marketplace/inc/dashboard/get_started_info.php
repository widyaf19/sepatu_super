<?php

add_action( 'admin_menu', 'electronics_marketplace_gettingstarted' );
function electronics_marketplace_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'electronics-marketplace'), esc_html__('About Theme', 'electronics-marketplace'), 'edit_theme_options', 'electronics-marketplace-guide-page', 'electronics_marketplace_guide');   
}

function electronics_marketplace_admin_theme_style() {
   wp_enqueue_style('electronics-marketplace-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'electronics_marketplace_admin_theme_style');

function electronics_marketplace_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Electronics Marketplace, you rock!', 'electronics-marketplace' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional shopping solution website. Please Click on the link below to know the theme setup information.', 'electronics-marketplace' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=electronics-marketplace-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'electronics-marketplace' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'electronics_marketplace_notice');

/**
 * Theme Info Page
 */
function electronics_marketplace_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'electronics-marketplace' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Electronics Marketplace', 'electronics-marketplace' ); ?></h2>
						<p>Version: <?php echo esc_html($theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'electronics-marketplace' ); ?>	
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'electronics-marketplace' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'electronics-marketplace'); ?></a>
						<a href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'electronics-marketplace'); ?></a>
						<a href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'electronics-marketplace'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Electronics Marketplace Theme', 'electronics-marketplace' ); ?></h2>
			<div class="row">
				<div class="theme-instruction-block col-md-7">
					<div class="pad-box">
	                    <p><?php esc_html_e( 'Electronics Marketplace is an ideal free theme for an online storefront, marketplace, supermarkets, eCommerce and fashion stores, website for shopping malls, carts, electronics product shops, digital stores, multivendor websites, and shopping stores. Its personalization options let you use it as a multipurpose theme for getting you a strong website. You will be able to get a fully responsive website that can be seen with precision on every screen. This theme is made user-friendly allowing users with or without coding skills to create their own website. It has got a beautiful banner and internal sections such as Blog, Team, Testimonial, and a lot more. Achieving better conversions is just a breeze now as you get many Call to Action Buttons (CTA) that will also guide the audience to take the next course of action. You will always get a phenomenal performance even if your website is seeing high traffic thanks to the optimized codes included in its core. You will witness huge traffic coming to your website as this theme is made SEO-friendly. It delivers faster page load time and its Bootstrap framework makes it robust. WPML and RTL compliance of this theme makes your website translation ready and most importantly, you will get to use the various social media icons for effectively using social media in promoting your products.', 'electronics-marketplace' ); ?><p><br>
						<ol>
							<li><?php esc_html_e( 'Start','electronics-marketplace'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','electronics-marketplace'); ?></a> <?php esc_html_e( 'your website.','electronics-marketplace'); ?> </li>
							<li><?php esc_html_e( 'Electronics Marketplace','electronics-marketplace'); ?> <a target="_blank" href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','electronics-marketplace'); ?></a> </li>
						</ol>
                    </div>
              	</div>
				<div class="col-md-5">
					<div class="pad-box">
              			<img class="logo" src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
              		 </div> 
              	</div>
            </div>
			<div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','electronics-marketplace'); ?></h2>
					<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','electronics-marketplace'); ?></h3>
	                    		<p class="pad-box-p"><?php esc_html_e( 'Electronics WordPress Theme has an incredible design that is built for delivering a sophisticated online marketplace for electronics stores, digital products, and gadgets shops. In order to facilitate the online sale of your digital and physical electronics products, it brings an intuitive and user-friendly theme interface that makes establishing an online store very easy and convenient as you don’t have to indulge in the coding part. Its Woocommerce compatibility wont let you face any kind of trouble as it not only sets up an online shop but also helps in generating online revenue as you can accept the orders as well as payments through online mode.', 'electronics-marketplace' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">								
								<h3><?php esc_html_e( 'Pro Theme Features','electronics-marketplace'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Theme options using customizer API','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Responsive design','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Site Icon and Logo option','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Header Images option','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Favicon, Logo, title, and tagline customization','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Pagination option','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Demo Importer','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Main Slider','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Woocommerce Compatible','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Unlimited Slides','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Section to show categories','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Product Listing based on category','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Top Categories Section','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Best Seller Tab','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Testimonial with custom post type','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Promotional Banners','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Partner listing','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Shortcodes for Testimonials','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Newsletter with the help of contact form 7.','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Well sanitized as per WordPress standards.','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Responsive layout for all devices','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Typography for the complete website','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Global Color pallete','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Section specific Color pallete','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Fully integrated with Font Awesome Icon','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Instagram Section','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Background Image Option','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Custom page templates','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Allow setting site title, tagline, logo','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Contact Page Template','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Blog Full width and right and left sidebar','electronics-marketplace'); ?></li>
										<li><?php esc_html_e( 'Recent post widget with images, Related post','electronics-marketplace'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','electronics-marketplace'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','electronics-marketplace'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','electronics-marketplace'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','electronics-marketplace'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','electronics-marketplace'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','electronics-marketplace'); ?></a> <?php esc_html_e( 'your website.','electronics-marketplace'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','electronics-marketplace'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','electronics-marketplace'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','electronics-marketplace'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','electronics-marketplace'); ?></h3>
					<ol>
						<a target="_blank" href="<?php echo esc_url( ELECTRONICS_MARKETPLACE_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'electronics-marketplace'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>