<?php get_header(); ?>
<body>
  <div class="container clearfix">
    <h1>
      <a href="/">
        <img src="<?php bloginfo('template_directory'); ?>/images/title.png" alt="Sophie's Glass" height="108" width="599" />
      </a>
    </h1>

    <div class="content grid_9">

      <?php
        if (have_posts()) {
          while (have_posts()) {
          the_post();
          ?>
          <div class="page">
            <h2><?php the_title(); ?></h2>
            <div class="body"><?php the_content(); ?></div>
          </div>
      <?php
          }
        }
      ?>

    </div>
    <?php get_sidebar(); ?>
  </div>
</body>
</html>
