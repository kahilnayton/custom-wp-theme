<?php get_header(); ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title">
                <?php the_title() ?>
            </h2>
<div class="content-page">
            <?php the_content(); ?>
            <hr>
            <?php comments_template(); ?>
          </div><!-- /.blog-post -->
          </div>
          
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>


        </div><!-- /.blog-main -->

       
<?php get_footer(); ?>