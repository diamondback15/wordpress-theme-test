<?php get_header() ?>
<div class="container">
  <div class="row">
    <?php while(have_posts()): the_post(); ?>
      <div class="col-12">
        <h3 class="title"><?php the_title() ?></h3>
        <div class="excerpt"><?php the_excerpt() ?></div>
      </div>
    <?php endwhile ?>
  </div>
</div>
<?php get_footer() ?>
