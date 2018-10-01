<?php
/**
 * Content for displaying Page
 *
 * @package BootIV-wp-theme
 * @author Marlontamo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-header">
    
    <?php the_title( '<h1>', '</h1>' ); ?>
     
    </div>

    <?php if ( has_post_thumbnail() )  the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?> 

    <div class="entry">

       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

    </div>

</article>
