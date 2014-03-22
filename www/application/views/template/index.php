<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=(isset($title))?$title:'Desire'?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <!--begin Css styles-->
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
    <!--end Css styles-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/library/html5shiv.js"></script>
      <script src="/js/library/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php ProfilerToolbar::render(true); ?>
    <? if(isset($menu))
        echo $menu;
    ?>

    <? if(isset($is_header)):?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>
    <? endif?>
    
    <div class="container">
      <!-- Example row of columns -->
        <?php
            if(Helper_Message::count() > 0) {
                echo Helper_Message::output();
            }
            if(isset($content) AND is_object($content)){
                $content
                        ->set('settings', (isset($settings))?$settings:'');
                echo $content; 
            }
        ?>
      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
</body>
</html>