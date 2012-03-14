<?php get_header(); ?>

<body>
  <div id="Wrapper">
    <h1 id="MainHeader"><a href="http://www.clifu.net">Command Line Kung Fu</a></h1>
    <section id="Twitter" class="Column">
      <h2>Latest Tweets</h2>
      <div id="TwitterFeed"></div>
    </section>
    <section id="Blog" class="Column">
      <h2>Latest Blog Posts</h2>
      <div id="BlogItems">
        <ul>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <li class="blog">
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
          </li>
          <?php endwhile; ?>
        <?php else: ?>
          <li class="blog">
            <h2><a href="http://www.clifu.net">No Posts Found</a></h2>
            Nothing Found
          </li>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        </ul>
      </div>
      <span class="NavLink Older"><?php next_posts_link( __( 'Older posts', 'clifu' ) ); ?></span>
      <span class="NavLink Newer"><?php previous_posts_link( __( 'Newer posts', 'clifu' ) ); ?></span>
    </section>
    <section id="Sidebar" class="Column">
      <?php //get_sidebar(); ?>
    </section>
  </div>

  <div id="Social">
    <a href="http://www.clifu.net/feed" title="RSS"><img src="<?php bloginfo('template_directory'); ?>/img/social//RSS.png" alt="RSS" /></a>
    <a href="http://www.twitter.com/mnmtanish" title="Twitter"><img src="<?php bloginfo('template_directory'); ?>/img/social//Twitter.png" alt="Twitter" /></a>
    <a href="http://www.facebook.com/mnmtanish" title="Facebook"><img src="<?php bloginfo('template_directory'); ?>/img/social//Facebook.png" alt="Facebook" /></a>
    <a href="https://code.google.com/codejam" title="LinkedIn"><img src="<?php bloginfo('template_directory'); ?>/img/social//LinkedIn.png" alt="LinkedIn" /></a>
    <a href="https://plus.google.com/u/0/113813933195738456360" title="Google Plus"><img src="<?php bloginfo('template_directory'); ?>/img/social//Google.png" alt="Google Plus" /></a>
    <a href="http://www.github.com/mnmtanish" title="GitHub"><img src="<?php bloginfo('template_directory'); ?>/img/social//GitHub.png" alt="GitHub" /></a>
  </div>
<?php get_footer(); ?>