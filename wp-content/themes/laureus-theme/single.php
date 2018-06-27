<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>

    <?php the_post_thumbnail(); ?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <h4>
              <em>
                <span class="text-muted author"><?php _e('By', 'rbc'); echo " "; the_author() ?>,</span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h4>
        </header>
        <section>
            <?php the_content(); ?>
        </section>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>