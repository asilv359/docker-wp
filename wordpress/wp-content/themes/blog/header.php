<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">



<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">


<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>

<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

<?php wp_head(); ?>


</head>

<body>
  <header>





    <nav class="navbar navbar-inverse">
      <div class="container-fluid">

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <?php /* Primary navigation */
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'depth' =>  2,
              'container' => false,
              'strcasecmp' => 1,
              'menu_class' => 'nav navbar-nav center',
              'menu_id' => 'navb',
              'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker()
            )
          );
                   ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>


  </header>
  