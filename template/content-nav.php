<?php 
/** 
 * 
 * 
 * @package bootIV-wp-theme 
 * @author Marlon tamo
 */ 
?>


<header>
    <nav class="navbar navbar-light text-white bg-info navbar-toggleable-sm">
    <div class="container">
        
         <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php bloginfo('name'); ?>">
                    <?php if ( get_header_image() != '' ) { ?>
                    <img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
                    <?php } else { ?>
                    <?php bloginfo( 'name' ); ?>
                    <?php } ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#containerNavbarCenter" aria-controls="containerNavbarCenter" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            </div>
            <div class=" collapse navbar-collapse" id="containerNavbarCenter">
         <?php 

                $defaults = array( 
                	'theme_location'=> 'header-navigation', 
                	'menu' => 'header-navigation', 
                	'container' => false, 
                	'container_class' => '', 
                	'container_id' => '', 
                	'menu_class' => 'nav navbar-nav text-white navbar-center', 
                	 'menu_id' => '', 
                	'echo' => true, 
                	'before' => '', 
                	'after' => '', 
                	'link_before' => '', 
                	'link_after' => '', 
                	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
                	'depth' => 2, 
                	'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 
                	'walker' => new wp_bootstrap_navwalker()
                	); 
                  wp_nav_menu( $defaults ); 
                //wp_nav_menu( $defaults );
                  ?>
            
          </div>  
        </div>
     </div>

    </nav>
    
</header>
 

            