	<?php
	require_once('simplepie.php'); 
	// We'll process this feed with all of the default options.
	$feed = new SimplePie();
	  
	// Set which feed to process.
	$feed->set_feed_url('http://ws.audioscrobbler.com/1.0/user/remix_tj/recenttracks.rss');
	$feed->set_input_encoding("UTF-8");   
	// Run SimplePie.
	$feed->init();
	    
	// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
	$feed->handle_content_type();
	foreach ($feed->get_items() as $item):
	?>
	<a href="<?php echo $item->get_permalink(); ?>" target="_blank"><?php echo $item->get_title(); ?></a>&nbsp;&nbsp;<span align="right"><small>@<?php echo $item->get_date('j F Y g:i a'); ?></small></span><br />
 	<?php endforeach; ?>
