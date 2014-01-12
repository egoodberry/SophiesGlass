<div class="sidebar grid_3">
  <section>
    <h3>About Sophie's Glass</h3>
    <p>
      Sophie's Glass is the blog of oenophile Sophie Barrett.
      <a href="/about">Read more about it.</a>
    </p>
  </section>

  <section>
    <h3>Search</h3>
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <input type="text" value="" name="s" id="s" />
    </form>
  </section>

  <section>
    <h3>Archives</h3>
    <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
      <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
      <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
    </select>
  </section>

  <section>
    <h3>Friends</h3>
    <ul><?php wp_list_bookmarks('categorize=0&title_li=0'); ?></ul>
  </section>

  <section>
    <h3>Tools</h3>
    <ul>
      <li><a href="<?php bloginfo('atom_url'); ?>">Subscribe</a></li>
      <li>
        <?php if (is_user_logged_in()) { ?>
          <a href="<?php echo admin_url(); ?>">Dashboard</a>
        <?php } else { ?>
          <a href="<?php echo wp_login_url(); ?>">Login</a>
        <?php } ?>
      </li>
    </ul>
  </section>

  <section>
    <small>
      Copyright ©<?php echo date("Y"); ?> Sophie Barrett
    </small>
  </section>
</div>
