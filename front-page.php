<?php get_header(); ?>
<section class="showcase">
  <div class="container">
    <h1><?php echo get_theme_mod('showcase_heading', ''); ?></h1>
    <p><?php echo get_theme_mod('showcase_text', ''); ?></p>
    <img class="image-front" src="<?php bloginfo('template_directory'); ?>/img/bandplaying.jpg" alt="ig"/>
  </div>
</section>

<style>

.showcase{
  background-image:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/new_landing.jpg'); ?>) no-repeat center
  background-size: 300px 100px;

}

@media only screen and (max-width: 400px) {
  .showcase {
    background: yellow;

  }

  .image-front{
    opacity: 0;
    /* display: none; */
  }


}

.navbar-brand{
    background:url(<?php echo get_theme_mod('logo_image', get_bloginfo('template_url').'/img/loyales_logo.png'); ?>) 
    no-repeat left;
}

</style>

<section class="boxes">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
      </div>
      <div class="col-md-4">
          <?php if(is_active_sidebar('box4')) : ?>
            <?php dynamic_sidebar('box4'); ?>
          <?php endif; ?>
      </div>
      <div class="col-md-4">
          <?php if(is_active_sidebar('box5')) : ?>
            <?php dynamic_sidebar('box5'); ?>
          <?php endif; ?>
      </div>


    </div>
  </div>
</section>


<footer class="blog-footer">
    
    
&copy; <?php echo date('Y'); ?> Lucy Music - a boutique music company | NYC's best wedding bands </p>

<p>
  <a href="#">Back to top</a>
</p>


<a href="https://www.facebook.com/theloyales" target="_blank"><img class="social-logo" src="<?php bloginfo('template_directory'); ?>/img/face.jpg" alt="fb"/>
<a href="https://www.instagram.com/the.loyales" target="_blank"><img class="social-logo" src="<?php bloginfo('template_directory'); ?>/img/inst.png" alt="ig"/>
<a href="https://www.twitter.com/theloyales" target="_blank"><img class="social-logo" src="<?php bloginfo('template_directory'); ?>/img/twit.jpg" alt="twit"/>




<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29254948-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </footer>

    <?php wp_footer(); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>