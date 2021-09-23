<?php get_header(); ?>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<!-- <div class="homa-banner col-md-12 h-100 img-fluid"></div> -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
        <div class="page-wrapper">

          <div class="blog-list clearfix">
            <?php

            // параметры по умолчанию
            $posts = get_posts(array(
              'numberposts' => -1,
              'category'    => 0,
              'orderby'     => 'date',
              'order'       => 'DESC',
              'include'     => array(),
              'exclude'     => array(),
              'meta_key'    => '',
              'meta_value'  => '',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
              setup_postdata($post);


            ?>
              <article class="post" style="padding-top:35px">
                <header>
                  <div class="title">
                    <h2 style="font-size: 1.5em"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt() ?></p>
                  </div>
                  <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('img-fluid'); ?>
                  </a>
                   <div class="meta">
                    <small><?php the_time('F jS, Y') ?> Author:<a href="#" class="author"> <?php the_author_posts_link() ?></small></a>
          </div>
          </header>



          </article>
          <hr class="invis">
        <?php
            }

            wp_reset_postdata(); // сброс

        ?>
        </div>
      </div><!-- end page-wrapper -->




    </div><!-- end col -->


    <?php get_footer(); ?>