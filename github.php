<?php

function get_content_from_github($url) {
/*	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,1);
	$content = curl_exec($ch);
	curl_close($ch);*/
	$content = @file_get_contents($url);
	return $content;
}

function acttoname($action) {
	$actions['CommitCommentEvent'] = "Commit comment";
	$actions['CreateEvent'] = "New repo/branch/tag added";
	$actions['DeleteEvent'] = "repo/branch/tag deleted";
	$actions['DownloadEvent'] = "New download created";
	$actions['FollowEvent'] = "New user followed";
	$actions['ForkEvent'] = "New fork created";
	$actions['ForkApplyEvent'] = "Patch applied from the fork queue";
	$actions['GistEvent'] = "New gist";
	$actions['GollumEvent'] = "Wiki page updated";
	$actions['IssueCommentEvent'] = "New comment on an issue";
	$actions['IssuesEvent'] = "New operations on an issue";
	$actions['MemberEvent'] = "New user added as collaborator";
	$actions['PublicEvent'] = "Repository made public";
	$actions['PullRequestEvent'] = "New pull request";
	$actions['PullRequestReviewCommentEvent'] = "A comment on a pull request";
	$actions['PushEvent'] = "Push";
	$actions['TeamAddEvent'] = "Team was modified";
	$actions['WatchEvent'] = "New watch";
	return $actions[$action];
}


function github() {
$myurl = 'https://api.github.com/users/remixtj';

/*if(strpos(phpversion(),"5.2") and !extension_loaded('json.so')) {
	if (!dl('json.so')) exit;
}*/
//var_dump(get_content_from_github($myurl));

$myinfos = json_decode(get_content_from_github($myurl),true);

if (!@array_key_exists('html_url',$myinfos)) {
?>

<div class="row" >
<div class="span4" ><p><img src="/img/github.png"><a href="https://github.com/remixtj/" target="_blank">Luca Lorenzetto - remixtj@github</a></p></div>
</div>

<?php
 return;

}
?>
<div class="row" >
<div class="span1"><a href="<?php echo $myinfos['html_url']; ?>" target="_blank"><img class="img-polaroid" src="<?php echo $myinfos['avatar_url'] ?>" style="float: left;" /></a></div>
<div class="span4" style="vertical-align:middle;"><p style="vertical-align:middle"><a href="<?php echo $myinfos['html_url'] ?>" target="_blank">Luca Lorenzetto - remixtj@github</a></p></div>
</div>
<div>
<h4>My Organizations</h4>
<p>
<?php

$myorgs = json_decode(get_content_from_github($myinfos['organizations_url']),true);
foreach ($myorgs as $organization) {
	?>
	<a href="https://github.com/<?php echo $organization['login']; ?>" data-toggle="tooltip" title="<?php echo $organization['login']; ?>"><img class="img-polaroid" src="<?php echo $organization['avatar_url'] ?>" /></a>
<?php
}

?>
</p>
<h4>My latest activities</h4>
<p>
<?php
$myactivities = json_decode(get_content_from_github(str_replace('{/privacy}','',$myinfos['events_url'])),true);
?>
<table class="table table-condensed table-hover">
<thead>
<th>Type</th><th>Repository</th><th>Message</th>
</thead>
<?php
foreach ($myactivities as $activity) {
?>
	<tr>
		<td><?php echo acttoname($activity['type']);?> </td>
		<td><a href="https://github.com/<?php echo $activity['repo']['name']?>" target="_blank"><?php echo $activity['repo']['name']?></a></td>
		<td>
<?php
		if ($activity['type'] == "CreateEvent") {
		?>
		<?php echo $activity['payload']['description']; ?>
		<?php
		}
		if ($activity['type'] == "PushEvent") {
			echo "<ul>";
			foreach ($activity['payload']['commits'] as $commit) {
				?><li><a href="https://github.com/<?php echo $activity['repo']['name']."/commit/".$commit['sha']; ?>" target="_blank"><?php echo $commit['message']?></a></li><?php
			}
			echo "</ul>";
		}

?>
		</td>
	</tr>
<?php
}
?>
</table>
</p>
</div>

<?php
}
?>
