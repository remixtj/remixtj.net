<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Luca 'remix_tj' Lorenzetto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      .bigModal{
         width:940px;
	 margin-left:-470px;
      }
      .twmodal {
	 width: 520px;
      }
      .inmodal {
	 width: 400px;
	}
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="/">Home</a></li>
	      <li class="active"><a href="#">Alpine</a></li>
              <li><a href="#about" data-toggle="modal" role="button">About</a></li>
              <li><a href="#contacts" data-toggle="modal" role="button">Contacts</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div align="right">
      <h1>Luca 'remix_tj' Lorenzetto</h1>
      <h2 class="typeface-js" style="font-family: Edwardian Script ITC; font-weight: normal">IT Administrator, Mountain Lover</h2>
      <div style="background-color: #ccc;opacity: .9; margin-left: 60%;">
      <p><h3>My recent mountain activity&nbsp;&nbsp;&nbsp;</h3>
      <?php
        function format_name($name) {
		$parsed_js = parse_ini_file("alpine/".$name."/data.ini");
		//$parsed_js = parse_ini_file("alpine/".$name."/data.js");
		//list($name,$extension) = explode(".",$parsed_js['var fgpx']);
		//return $name." ".$parsed_js['var trackname'];
		//list($name,$extension) = explode(".",$parsed_js['var fgpx']);
		return $parsed_js['title'];
	}
      	$excursions = scandir("alpine/");
	foreach ($excursions as $dir) {
		if ($dir != "." && $dir != ".." and $dir != 'index.php') echo "<a href=\"alpine/$dir\">".format_name($dir)."</a>&nbsp;&nbsp;&nbsp;<br /> ";
	}
	?></p>
	</div>
     </div>
     <?php include('about.html'); ?> 
     
     <div id="contacts" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-contacts" aria-hidden="true">
    	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="modal-label-contacts">Contacts</h3>
	</div>
	<div class="modal-body"><p>
	<address>
	  	<strong>Email</strong><br>
		<a href="mailto:lorenzetto.luca@gmail.com">lorenzetto.luca@gmail.com</a>
	</address>
	<address>
	  	<strong>Skype</strong><br>
		lorenzetto.luca@gmail.com
	</address>
	<address>
	  	<strong>IRC</strong><br>
		remix_tj @ FreeNode <br> remix_tj @ EFNet 
	</address>
	</p></div>
     </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<!--    <script src="/js/jquery.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>
    <script src="/js/typeface.js"></script>
    <script src="/js/typeface-edwardian.js"></script>
  </body>
</html>
