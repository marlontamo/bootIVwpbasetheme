<?php
/**
 * Template Name: BootIV theme template
 *
 * this template is what we need to edit in converting psd to wp
 * 
 *
 * @package bootIV-wp-theme
 * @author marlontamo
 */

get_header(); ?>



        <main class="container">

            

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post" id="post-<?php the_ID(); ?>">

                <div class="page-header">

                    <?php #the_title( '<h1>', '</h1>' ); ?>

                </div>

                <div class="row">

                    <div class="entry col-sm-6">

                        <?php the_content(); ?>

                    </div>

                    <div class="entry col-sm-6">

                        
                	
                    </div>

                </div>

            </article>

            <?php endwhile; endif; ?>

        </main>


    
<div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>