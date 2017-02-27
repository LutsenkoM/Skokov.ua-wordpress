<?php
/*
    Template Name: Blog
*/
?>
<?php get_header(); ?>
<div>
    <h2> <?php the_title(); ?> </h2>
</div>
<section class="content">
        <div class="blogs">
            <?php // Display blog posts on any page @ http://m0n.co/l
            $temp = $wp_query; $wp_query= null;
            $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <article class="art">
                    <?php the_post_thumbnail('medium' ) ?>
                <div>
                    <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                    <div class="information">by <?php the_author() ?>/<?php comments_number()?>/ <?php the_date()?>  </div>
                    <p><?php the_excerpt() ; ?></p>
                </div>
                </article>
            <?php endwhile; ?>

            <?php if ($paged > 1) { ?>

                <nav id="nav-posts">
                    <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                    <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                </nav>

            <?php } else { ?>

                <nav id="nav-posts">
                    <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                </nav>

            <?php } ?>

            <?php wp_reset_postdata(); ?>

        </div>
    <?php get_sidebar()?>
</section>
<?php get_footer(); ?>