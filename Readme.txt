=== Zorpia That's Hot Box ===

Tags: poll,survey,digg,box,zorpia
Contributors: Zorpia Team
Requires at least: 0.1
Tested up to: 0.1
Stable tag: 0.1
Donate link: 

== Description ==

Zorpia
http://www.zorpia.com

Zorpia Gossip
http://www.zorpia.com/gossip

Zorpia Gossip Wordpress Plugin
http://www.zorpia.com/info/wordpress_plugin

Original Release: July 9, 2007
This release: July 9, 2007

Version: 0.1

Released under the CC GPL 2.0
http://creativecommons.org/licenses/GPL/2.0/
    	
== Features ==
 * Lets users publish articles of your website to Zorpia.com directly and expand your site.
 * Lets users vote the published articles of your website (Use AJAX).
 * Show voted points to each article with the widget.
 * Allow to config theme & style of the widget.

== Installation ==

1. Download the plugin and unzip to 2 files: zorpia_hot_box.php & readme.txt.
2. Upload the file zorpia_hot_box.php to your WordPress plugin folder,  example:  wp-content/plugins/.
3. Go to the WordPress admin page and activate the plugin under the Plugins tab.
4. Find the current theme's folder which is under wp-content/themes, 
	(or find it at the wp admin center --> Presentation --> Theme Editor)
    and edit single.php (if there is theloop.php, edit theloop.php instead):
    put the following code between <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    and <?php endwhile; else: ?> : 

	<?php if (function_exists('zorpia_hot_box')) zorpia_hot_box() ?>

    you can also edit index.php in the current theme's folder,(similar to editing single.php) 
    to add 1 widget to each entry in your blog homepage.

-----
There is another predefined compact theme(width=200px,height=20px) of the 'Zorpia Thats Hot Box' 
for your choice, and the relevant code is:

	<?php if (function_exists('zorpia_hot_box')) zorpia_hot_box('compact') ?>

If you use the compact theme of the widget, you can also define the font color and background color of the widget,
for example, if you expect the font color is #FFFFFF and background color is #000000, just call it:
	
	<?php if (function_exists('zorpia_hot_box')) zorpia_hot_box('compact', 'FFFFFF', '000000') ?>

-----
The reference of function zorpia_hot_box():
	zorpia_hot_box($theme = '', $point_font_color = '', $point_bg_color = '', $content_tag_id = '')

-----
See also: http://www.zorpia.com/info/wordpress_plugin

== Frequently Asked Questions ==

1. How to vote an article with the widget?

	Just click the "that's hot" button of the widget.
	Before the article gets points, it must be published to Zorpia.com (click "that's hot" button, too).
	Note: only registered users of Zorpia.com can operate it successfully.

== Screenshots ==

<img src="/Activate01.jpg">
<img src="/example01.jpg">
<img src="/example02.jpg">



== Contact Developer ==

* Email: support@zorpia.com

* Forum: http://www.zorpia.com/forum/3
