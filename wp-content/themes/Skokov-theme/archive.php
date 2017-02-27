<!---->
<!--/*-->
<!-- * The template for displaying all single posts-->
<!-- *-->
<!-- * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post-->
<!-- *-->
<!-- * @package maxtheme-->
<!-- */-->

<?php get_header(); ?>



<section class="content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();?>

                <!--//                get_template_part( 'template-parts/content', get_post_format() );-->

                <article>
                    <?php the_post_thumbnail( ) ?>
                    <h2> <?php the_title(); ?> </h2>
                    <!--                    <h2><a href="--><?php //the_permalink(); ?><!--" title="Read more">--><?php //the_title(); ?><!--</a></h2>-->
                    <?php the_content(); ?>
                </article>

                <!--                // If comments are open or we have at least one comment, load up the comment template.-->
                <?php   if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>


