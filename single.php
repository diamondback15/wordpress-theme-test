<?php get_header() ?>
<div class="container">
  <div class="row">
    <div  class="col-12">
      <?php while(have_posts()): the_post() ?>
        <h1 class="entry-title"><?php the_title() ?></h1>
        <div class="entry-content">
          <?php the_content() ?>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</div>
<?php get_footer() ?>
