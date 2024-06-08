<?php
/**
 * The template for displaying all pages.
 * @package Ecommerce Solution
 */

get_header(); ?>

<?php do_action( 'ecommerce_solution_page_top' ); ?>
<main role="main" id="skip_content">
    <div class="container background-img-skin">
        <div class="main-wrapper py-4 px-0">
            <?php $ecommerce_solution_theme_lay = get_theme_mod( 'ecommerce_solution_page_sidebar_options','One Column');
                if($ecommerce_solution_theme_lay == 'One Column'){ ?>
                    <?php if(get_theme_mod('ecommerce_solution_single_page_breadcrumb',false) == 1){ ?>
                        <div class="bradcrumbs">
                            <?php ecommerce_solution_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-page'); 
                    endwhile; ?>
            <?php }else if($ecommerce_solution_theme_lay == 'Right Sidebar'){ ?>
                <div class="row">
                    <div class="<?php if( get_theme_mod( 'ecommerce_solution_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8"<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
                        <?php if(get_theme_mod('ecommerce_solution_single_page_breadcrumb',false) == 1){ ?>
                            <div class="bradcrumbs">
                                <?php ecommerce_solution_the_breadcrumb(); ?>
                            </div>
                        <?php }?>
                        <?php while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content-page');
                        endwhile; ?>
                    </div>
                    <div id="sidebar" class="<?php if( get_theme_mod( 'ecommerce_solution_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php dynamic_sidebar('sidebar-2'); ?></div>
                </div>
            <?php }else if($ecommerce_solution_theme_lay == 'Left Sidebar'){ ?>
                <div class="row">
                    <div id="sidebar" class="<?php if( get_theme_mod( 'ecommerce_solution_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php dynamic_sidebar('sidebar-2'); ?></div>
                    <div class="<?php if( get_theme_mod( 'ecommerce_solution_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8"<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
                        <?php if(get_theme_mod('ecommerce_solution_single_page_breadcrumb',false) == 1){ ?>
                            <div class="bradcrumbs">
                                <?php ecommerce_solution_the_breadcrumb(); ?>
                            </div>
                        <?php }?>
                        <?php while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content-page'); 
                        endwhile; ?>
                    </div>
                </div>
            <?php }else {?>
                <div class="row">
                    <div class="<?php if( get_theme_mod( 'ecommerce_solution_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-8 col-md-8"<?php } else { ?>col-lg-9 col-md-8 <?php } ?>">
                        <?php if(get_theme_mod('ecommerce_solution_single_page_breadcrumb',false) == 1){ ?>
                            <div class="bradcrumbs">
                                <?php ecommerce_solution_the_breadcrumb(); ?>
                            </div>
                        <?php }?>
                        <?php while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content-page'); 
                        endwhile; ?>
                    </div>
                    <div id="sidebar" class="<?php if( get_theme_mod( 'ecommerce_solution_sidebar_size', 'Sidebar 1/3') == 'Sidebar 1/3') { ?>col-lg-4 col-md-4"<?php } else { ?>col-lg-3 col-md-4 <?php } ?>"><?php dynamic_sidebar('sidebar-2'); ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php do_action( 'ecommerce_solution_page_bottom' ); ?>

<?php get_footer(); ?>
