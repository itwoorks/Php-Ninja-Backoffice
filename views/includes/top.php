<!DOCTYPE html>
<html>
	<head>
		<title><?= $base_title ?> | BackOffice </title>
		<meta name="title" content="BackOffice">
	    <meta name="author" content="Php Ninja">
		<meta name="description" content="BackOffice">

		<meta charset="utf-8">
		<base href="<?= $base_url ?>" content="<?= $base_url ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   	<link href="views/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	   	<link href="views/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	   	<link href="views/css/main.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="views/jQuery-ui-1.8.16/themes/base/jquery.ui.all.css">


	 	<script src="views/js/jquery.js"></script>	

		<script src="views/jQuery-ui-1.8.16/minified/jquery.ui.core.min.js"></script>
		<script src="views/jQuery-ui-1.8.16/minified/jquery.ui.widget.min.js"></script>
		<script src="views/jQuery-ui-1.8.16/minified/jquery.ui.mouse.min.js"></script>
		<script src="views/jQuery-ui-1.8.16/minified/jquery.ui.datepicker.min.js"></script>
		<script src="views/jQuery-ui-1.8.16/minified/jquery.ui.sortable.min.js"></script>
		<script src="views/jQuery-ui-1.8.16/i18n/jquery.ui.datepicker-es.js"></script>
		<script src="views/jQuery-ui-1.8.16/jquery.timepicker.js"></script>
		
<!--ELRTE-->
	<!-- jQuery and jQuery UI -->
	<script src="http://www.itwoorks.com/rising/admin/views/elrte/js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://www.itwoorks.com/rising/admin/views/elrte/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="http://www.itwoorks.com/rising/admin/views/elrte/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">

	<!-- elRTE -->
	<script src="http://www.itwoorks.com/rising/admin/views/elrte/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="http://www.itwoorks.com/rising/admin/views/elrte/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

	<!-- elRTE translation messages -->
	<script src="http://www.itwoorks.com/rising/admin/views/elrte/js/i18n/elrte.ru.js" type="text/javascript" charset="utf-8"></script>
		
<!--rte-->

		<script>
		var BASE_URL = '<?= $base_url ?>';
		</SCRIPT>
		<script type="text/javascript" src="views/js/functions.js"></script>
		<script src="views/js/pagination3.js"></script>
		
	</head>
	<?php flush(); ?>
	<body>
	<div id="overlay" style="display:none;"><?= SENDING ?> ...</div>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?= $base_title ?></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
             <i class="icon-user"></i> admin 
            </p>
            <ul class="nav">

              <li><a href="<?= $base_url ?>../">Ir a la página</a></li>
            <li><a href="login/logout">Cerrar Sesión</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container-fluid">
		
   


	<div class="row-fluid">
    <div class="span2">
          <div class="well sidebar-nav well-small">
            <ul class="nav nav-list">
              

		
<? foreach($menu as $item): ?>
			   <li><a href="show/table/<?= $item[0] ?>"><i class="icon-book"></i>    <?= $item[1] ?></a></li>
			<? endforeach;?>

         

          </div><!--/.well -->
        </div><!--/span-->
	
		<div  id="main" class="span10" >
