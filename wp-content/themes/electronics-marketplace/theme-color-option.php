<?php

	$electronics_marketplace_custom_css ='';

	$electronics_marketplace_first_color = get_theme_mod('electronics_marketplace_first_color');
	$electronics_marketplace_second_color = get_theme_mod('electronics_marketplace_second_color');
	/*------------ Global First Color -----------*/
	$electronics_marketplace_custom_css .='.topbar, span.cart-value, .login-box a:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .more-btn a:hover, #new-collection strong:after, #new-collection strong:before, .woocommerce span.onsale, .woocommerce a.button, .postbtn a:hover, .pagination .current, .pagination a:hover, #comments a.comment-reply-link, #comments input[type="submit"].submit, .woocommerce button.button, .woocommerce a.button.alt, nav.woocommerce-MyAccount-navigation ul li, .woocommerce button.button.alt, .woocommerce #respond input#submit, .woocommerce nav.woocommerce-pagination ul li a, .single-post-page .category a, .wp-block-woocommerce-empty-cart-block .wp-block-button a, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a, .wp-block-woocommerce-cart .wc-block-cart__submit-container a, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a{';
		$electronics_marketplace_custom_css .='background-color: '.esc_attr($electronics_marketplace_first_color).';';
	$electronics_marketplace_custom_css .='}';

	$electronics_marketplace_custom_css .='.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
		$electronics_marketplace_custom_css .='background-color: '.esc_attr($electronics_marketplace_first_color).'!important;';
	$electronics_marketplace_custom_css .='}';

	$electronics_marketplace_custom_css .='.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
		$electronics_marketplace_custom_css .='border-color: '.esc_attr($electronics_marketplace_first_color).'!important;';
	$electronics_marketplace_custom_css .='}';

	$electronics_marketplace_custom_css .='.logo p a, .nav-links a, p.logged-in-as a, td.product-name a:hover{';
		$electronics_marketplace_custom_css .='color: '.esc_attr($electronics_marketplace_first_color).';';
	$electronics_marketplace_custom_css .='}';

	$electronics_marketplace_custom_css .='#scrollbutton i{';
		$electronics_marketplace_custom_css .='box-shadow: 0px 0px 0px '.esc_attr($electronics_marketplace_first_color).' , 0px 5px 0px 0px '
		.esc_attr($electronics_marketplace_first_color).' , 0px 5px 4px #000 ;';
	$electronics_marketplace_custom_css .='}';

	/*------------ Global Second Color -----------*/
	$electronics_marketplace_custom_css .='.login-box i, .cat-content, #scrollbutton i, .primary-navigation ul ul a:hover, .footer-wp h3:after, .footer-wp button, .footer-wp input[type="submit"], .copyright-wrapper, .metabox span .fa-calendar-alt:before, .metabox span .fa-user:before, .metabox span .fa-comments:before, .metabox span .fa-clock:before, .bradcrumbs a, .bradcrumbs span, #sidebar button, .tags a:hover, .nav-next a:hover, .nav-previous a:hover, #sidebar ul li:before, #sidebar input[type="submit"], #sidebar input[type="submit"]:hover, #sidebar .tagcloud a:hover, .footer-wp .tagcloud a:hover, .widget_calendar tbody a{';
		$electronics_marketplace_custom_css .='background-color: '.esc_attr($electronics_marketplace_second_color).';';
	$electronics_marketplace_custom_css .='}';

	$electronics_marketplace_custom_css .='.footer-wp h3, .footer-wp li a:hover, #sidebar ul li a:hover, .metabox span a:hover, .footer-wp a.rsswidget, .blog-section h2 a:hover{';
		$electronics_marketplace_custom_css .='color: '.esc_attr($electronics_marketplace_second_color).'!important;';
	$electronics_marketplace_custom_css .='}';

	$electronics_marketplace_custom_css .='#scrollbutton i{';
		$electronics_marketplace_custom_css .='border-color: '.esc_attr($electronics_marketplace_second_color).';';
	$electronics_marketplace_custom_css .='}';

	// menu font weight
	$ecommerce_solution_font_weight_option_menu = get_theme_mod( 'ecommerce_solution_font_weight_option_menu','500');
	if($ecommerce_solution_font_weight_option_menu != ''){
		$electronics_marketplace_custom_css .='.menu-header .primary-navigation ul li a, .primary-navigation a, .primary-navigation ul li a{';
			$electronics_marketplace_custom_css .='font-weight: '.esc_attr($ecommerce_solution_font_weight_option_menu).';';
		$electronics_marketplace_custom_css .='}';
	}

	// menu settings
	$ecommerce_solution_menu_font_size_option = get_theme_mod('ecommerce_solution_menu_font_size_option');
	$electronics_marketplace_custom_css .='.menu-header .primary-navigation ul li a{';
		$electronics_marketplace_custom_css .='font-size: '.esc_attr($ecommerce_solution_menu_font_size_option).'px;';
	$electronics_marketplace_custom_css .='}';

	// menu top-bottom padding
	$ecommerce_solution_menu_top_bottom_padding = get_theme_mod('ecommerce_solution_menu_top_bottom_padding');
	$electronics_marketplace_custom_css .='.primary-navigation a, .topbar .primary-navigation a{';
		$electronics_marketplace_custom_css .='padding-top: '.esc_attr($ecommerce_solution_menu_top_bottom_padding).'px !important;';
		$electronics_marketplace_custom_css .='padding-bottom: '.esc_attr($ecommerce_solution_menu_top_bottom_padding).'px !important;';
	$electronics_marketplace_custom_css .='}';

	// menu left-right padding
	$ecommerce_solution_menu_left_right_padding = get_theme_mod('ecommerce_solution_menu_left_right_padding');
	$electronics_marketplace_custom_css .='.primary-navigation a, .topbar .primary-navigation a{';
		$electronics_marketplace_custom_css .='padding-left: '.esc_attr($ecommerce_solution_menu_left_right_padding).'px !important;';
		$electronics_marketplace_custom_css .='padding-right: '.esc_attr($ecommerce_solution_menu_left_right_padding).'px !important;';
	$electronics_marketplace_custom_css .='}';

	// Display Sticky Header
	$ecommerce_solution_fixed_header = get_theme_mod( 'ecommerce_solution_display_fixed_header',false);
	if($ecommerce_solution_fixed_header == true && get_theme_mod( 'ecommerce_solution_sticky_header',false) != true){
    	$electronics_marketplace_custom_css .='.fixed-header{';
			$electronics_marketplace_custom_css .='position:static;';
		$electronics_marketplace_custom_css .='} ';
	}
    if($ecommerce_solution_fixed_header == true){
    	$electronics_marketplace_custom_css .='@media screen and (max-width:575px) {';
		$electronics_marketplace_custom_css .='.fixed-header{';
			$electronics_marketplace_custom_css .='position:fixed;';
		$electronics_marketplace_custom_css .='} }';
	}else if($ecommerce_solution_fixed_header == false){
		$electronics_marketplace_custom_css .='@media screen and (max-width:575px){';
		$electronics_marketplace_custom_css .='.fixed-header{';
			$electronics_marketplace_custom_css .='position:static;';
		$electronics_marketplace_custom_css .='} }';
	}

	$ecommerce_solution_woocommerce_product_border_enable = get_theme_mod('ecommerce_solution_woocommerce_product_border_enable',true);
	if($ecommerce_solution_woocommerce_product_border_enable == false){
	$electronics_marketplace_custom_css .='.products li{';
	$electronics_marketplace_custom_css .='border: none !important; box-shadow:none !important;';
	$electronics_marketplace_custom_css .='}';
	}

	$ecommerce_solution_woocommerce_product_padding_top = get_theme_mod('ecommerce_solution_woocommerce_product_padding_top',10);
	$electronics_marketplace_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
	$electronics_marketplace_custom_css .='padding-top: '.esc_attr($ecommerce_solution_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($ecommerce_solution_woocommerce_product_padding_top).'px !important;';
	$electronics_marketplace_custom_css .='}';

	$ecommerce_solution_woocommerce_product_padding_right = get_theme_mod('ecommerce_solution_woocommerce_product_padding_right',10);
	$electronics_marketplace_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
	$electronics_marketplace_custom_css .='padding-left: '.esc_attr($ecommerce_solution_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($ecommerce_solution_woocommerce_product_padding_right).'px !important;';
	$electronics_marketplace_custom_css .='}';

	$ecommerce_solution_woocommerce_product_border_radius = get_theme_mod('ecommerce_solution_woocommerce_product_border_radius',3);
	$electronics_marketplace_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
	$electronics_marketplace_custom_css .='border-radius: '.esc_attr($ecommerce_solution_woocommerce_product_border_radius).'px;';
	$electronics_marketplace_custom_css .='}';

	$ecommerce_solution_woocommerce_product_box_shadow = get_theme_mod('ecommerce_solution_woocommerce_product_box_shadow', 5);
	$electronics_marketplace_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
	$electronics_marketplace_custom_css .='box-shadow: '.esc_attr($ecommerce_solution_woocommerce_product_box_shadow).'px '.esc_attr($ecommerce_solution_woocommerce_product_box_shadow).'px '.esc_attr($ecommerce_solution_woocommerce_product_box_shadow).'px #eee !important;';
	$electronics_marketplace_custom_css .='}';

	//Copyright text color
	$ecommerce_solution_copyright_text_color = get_theme_mod('ecommerce_solution_copyright_text_color');
	$electronics_marketplace_custom_css .='.copyright-wrapper p, .copyright-wrapper p a{';
		$electronics_marketplace_custom_css .='color: '.esc_attr($ecommerce_solution_copyright_text_color).';';
	$electronics_marketplace_custom_css .='}';

	//Copyright background css
	$ecommerce_solution_copyright_text_background = get_theme_mod('ecommerce_solution_copyright_text_background');
	$electronics_marketplace_custom_css .='.copyright-wrapper{';
		$electronics_marketplace_custom_css .='background-color: '.esc_attr($ecommerce_solution_copyright_text_background).';';
	$electronics_marketplace_custom_css .='}';

	//back to top icon color
	$ecommerce_solution_scroll_icon_color = get_theme_mod('ecommerce_solution_scroll_icon_color');
	$electronics_marketplace_custom_css .='#scrollbutton i{';
		$electronics_marketplace_custom_css .='color: '.esc_attr($ecommerce_solution_scroll_icon_color).';';
	$electronics_marketplace_custom_css .='}';

	//back to top icon hover color
	$ecommerce_solution_scroll_icon_hover_color = get_theme_mod('ecommerce_solution_scroll_icon_hover_color');
	$electronics_marketplace_custom_css .='#scrollbutton i:hover{';
		$electronics_marketplace_custom_css .='color: '.esc_attr($ecommerce_solution_scroll_icon_hover_color).';';
	$electronics_marketplace_custom_css .='}';

	//Back to Top Bg Color
	$ecommerce_solution_scroll_icon_background = get_theme_mod('ecommerce_solution_scroll_icon_background');
	$electronics_marketplace_custom_css .='#scrollbutton i{';
		$electronics_marketplace_custom_css .='background-color: '.esc_attr($ecommerce_solution_scroll_icon_background).';';
		$electronics_marketplace_custom_css .='border-color: '.esc_attr($ecommerce_solution_scroll_icon_background).';';
	$electronics_marketplace_custom_css .='}';
	