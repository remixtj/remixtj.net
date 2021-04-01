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
              <li class="active"><a href="#">Home</a></li>
              <li><a href="/alpine.php">Alpine</a></li>
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
      <p>
      <a href="#twitter" role="button" data-toggle="modal"><img src="/img/twitter.png" /></a>&nbsp;
      <a href="#lastfm" role="button" data-toggle="modal"><img src="/img/lastfm.png" /></a>&nbsp;
      <a href="#linkedin" role="button" data-toggle="modal"><img src="/img/linkedin.png" /></a>&nbsp;
      <a href="#github" role="button" data-toggle="modal"><img src="/img/github.png" /></a>&nbsp;
     </div>
     <div id="twitter" class="twmodal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-twitter" aria-hidden="true">
<!--    	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="modal-label-twitter">Twitter @remix_tj</h3>
	</div>
	<div class="modal-body"><p>
	</p></div>-->
	<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/remix_tj" data-widget-id="310754984281112576">Tweets di @remix_tj</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	 </div>
     <div id="lastfm" class="modal bigmodal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-lastfm" aria-hidden="true">
    	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="modal-label-lastfm">Last.fm Recent Tracks</h3>
	</div>
	<div class="modal-body" id="#lastfmbody">
	<?php include('lastfm.php'); ?>
	</div>
     </div>

     <div id="linkedin" class="inmodal modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-linkedin" aria-hidden="true">
    	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="modal-label-linkedin">Linkedin</h3>
	</div>
	<div class="modal-body"><p class="text-center">
    	<!--<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>-->
	<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
	<!--<script type="IN/MemberProfile" data-id="http://www.linkedin.com/in/remixtj/it" data-format="inline" data-related="false"></script>-->
<div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="en_US" data-type="horizontal" data-theme="light" data-vanity="remixtj"><a class="LI-simple-link" href='https://it.linkedin.com/in/remixtj?trk=profile-badge'>Luca Lorenzetto</a></div>
	</p></div>
     </div>
     <div id="github" class="modal bigmodal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-github" aria-hidden="true">
    	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="modal-label-github">Github - Projects and Organizations</h3>
	</div>
	<div class="modal-body"><p>
    	<?php include('github.php'); github();?>
	</p></div>
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
		remix_tj @ FreeNode <br> remix_tj @ EFNet <br> 
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
