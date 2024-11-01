<?php
/*
Plugin Name: Zorpia That's Hot Box
Plugin URI: http://www.zorpia.com/info/gossip_api

Author: Zorpia Team
Version: 0.1
Author URI: http://www.zorpia.com/gossip
Description: to allow visitors on your site to add the desired page from your site to Zorpia Gossip and vote for it.
2 themes of the widgets:
1) Default theme. Call it:
 <?php if (function_exists('zorpia_hot_box')) zorpia_hot_box() ?>

2) compact Theme. Call it:
 <?php if (function_exists('zorpia_hot_box')) zorpia_hot_box('compact') ?>

*/ 

function zorpia_hot_box($theme = '', $point_font_color = '', $point_bg_color = '', $content_tag_id = '') {
	global $id;

    if(!$id) return;
	$post = get_post($id);
	if(!$content_tag_id) $content_tag_id = "post-$id";
	$story_url = urlencode($post->guid);
	$story_title = urlencode($post->post_title);

	$width = 74;	# default theme width
	$height = 88;	# default theme height
	if($theme == 'compact') {
		$width = 120;
		$height = 20;
	};

	echo <<<EOT

<div class="zorpia_box">
<iframe src="http://www.zorpia.com/story/api/valid?u=$story_url&tl=$story_title&c=&tp=blog&cid=$content_tag_id&theme=$theme&pfc=$point_font_color&pbc=$point_bg_color" 
height="$height" width="$width" frameborder="0" scrolling="no" id="zorpia_vote_box" style="background:transparent" allowtransparency="true"></iframe>
<!-- <a href="http://www.zorpia.com/gossip" title="Zorpia Gossip">Zorpia Gossip</a> -->
</div>

EOT;

}

?>