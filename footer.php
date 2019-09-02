<?php if(!is_front_page()) : ?>
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php if(is_active_sidebar('sidebar')): ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
            </div><!-- /.blog-sidebar -->
        </div><!-- /.row -->
        <?php endif; ?>
        </div><!-- /.container -->


<footer class="blog-footer"> 

    
&copy; <?php echo date('Y'); ?> Lucy Music - a boutique music company | NYC's best wedding bands.</p>


<a href="https://www.facebook.com/theloyales" target="_blank"><img class="social-logo" src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="fb"/>

<a href="https://www.instagram.com/the.loyales" target="_blank"><img class="social-logo" src="<?php bloginfo('template_directory'); ?>/img/inst.png" alt="ig"/>

<a href="https://www.twitter.com/theloyales" target="_blank"><img class="social-logo" src="<?php bloginfo('template_directory'); ?>/img/twit.jpg" alt="twit"/>

      <p>
        <a href="#">Back to top</a>
      </p>

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
