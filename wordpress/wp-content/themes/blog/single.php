<?php get_header(); ?>
<section class="section">
    <div class="container">
<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

<article class="post">
    <div class="title">
      <h2 style="font-size: 2.1em"><a href="#"><?php the_title(); ?></a></h2>
      <p><?php the_content() ?></p>
    </div>
    <div class="meta">
    <small><?php the_time('F jS, Y') ?>   Author:<a href="#" class="author"> <?php the_author_posts_link() ?></small></a>
    </div>
 
</article>
<div>
</div>
</div>

<?php get_footer(); ?>
