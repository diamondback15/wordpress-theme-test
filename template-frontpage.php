<?php
/*
* Template name: Front Page
*/
?>
<?php get_header() ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="title"><?php the_title() ?></h1>
      </br />
      <div class="content"><?php the_content() ?></div>
    </div>
    <?php $posts = new WP_Query("post_type=post"); ?>
    <?php while($posts->have_posts()):  $posts->the_post(); ?>
      <div class="col-12">
        <a href="<?php the_permalink() ?>" class="title"><?php the_title() ?></a>
        <div class="excerpt"><?php the_excerpt() ?></div>
      </div>
    <?php endwhile ?>
  </div>
</div>
<?php get_footer() ?>
