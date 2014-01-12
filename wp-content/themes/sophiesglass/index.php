<?php get_header(); ?>
<body>
  <div class="container clearfix">
    <h1>
      <a href="/">
        <img src="<?php bloginfo('template_directory'); ?>/images/title.png" alt="Sophie's Glass" />
      </a>
    </h1>

    <div class="content grid_9">

      <?php
        if (have_posts()) {
          while (have_posts()) {
          the_post();
          ?>
          <div class="post">
            <div class="meta clearfix">
              <div class="date">
                <div class="month"><?php echo get_the_date('M'); ?></div>
                <div class="day"><?php echo get_the_date('j'); ?></div>
              </div>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="body"><?php the_content(); ?></div>
          </div>

      <?php
        } ?>
        <div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
      <?php
        }
        if (is_single($post)) {
          comments_template();
        }
      ?>

    </div>
    <?php get_sidebar(); ?>
  </div>
</body>
</html>
