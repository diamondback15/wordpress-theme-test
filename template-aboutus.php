<?php
/*
* Template name: About Us
*/
?>
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
    <div  class="col-4">Column 1</div>
    <div  class="col-4">Column 2</div>
    <div  class="col-4">Column 3</div>
  </div>
</div>
<?php get_footer() ?>
