<?php
/**
 * The template for displaying archive pages
*/

get_header(); ?>

            <h2 class="page-heading"><?php the_archive_title(); ?></h2>

        <section>
            

       <?php
          if ( have_posts() ) {
            while(have_posts() ){ 
                  the_post();
            
        ?>
       
        <div class="card">
            <div class="card-img-holder" style="height: 190px;">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium' ); ?>" alt="card Image" >
                    </a>
                </div>
            </div>

            <div class="card-description">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
               <p class="card-meta"> Posted by <strong> <?php the_author(); ?> </strong> on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more...</a>
            </div>
        </div>
            
        <?php  
                }
                    } 
           wp_reset_query(); ?>
        </section>

        <div class="pagination">
                <?php echo paginate_links(); ?>
        </div>

        
        <?php get_footer(); ?>
        