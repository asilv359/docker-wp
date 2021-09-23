<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
  <div class="widget">
    <h2 class="widget-title">Popular Posts</h2>
    <div class="blog-list-widget">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="w-100 justify-content-between">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/3.png" alt="" class="img-fluid float-left">
            <h5 class="mb-1">5 Beautiful buildings you need..</h5>
            <small>12 Jan, 2016</small>
          </div>
        </a>

        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="w-100 justify-content-between">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/2.png" alt="" class="img-fluid float-left">
            <h5 class="mb-1">Let's make an introduction for..</h5>
            <small>11 Jan, 2016</small>
          </div>
        </a>

        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="w-100 last-item justify-content-between">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/1.png" alt="" class="img-fluid float-left">
            <h5 class="mb-1">Did you see the most beautiful..</h5>
            <small>07 Jan, 2016</small>
          </div>
        </a>
      </div>
    </div><!-- end blog-list -->
  </div><!-- end widget -->






  <?php if (is_active_sidebar('sidebar')) : ?>
    <?php dynamic_sidebar('sidebar'); ?>
  <?php endif ?>
</div>
</div><!-- end row -->
</div><!-- end container -->
</section>