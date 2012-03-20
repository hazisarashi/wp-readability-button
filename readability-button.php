<?php
/*
Plugin Name: Readability button
Plugin URI: http://hazisarashi.com/
Description: Readabilityのボタンをブログ記事のタイトル下に表示します。
Version: 0.0.1
Author: HAZI
Author URI: http://hazisarashi.com/
*/

function add_readability_button($wp_title) {
	
	$my_print = <<<EOF
<div class="rdbWrapper" data-show-read="1" data-show-send-to-kindle="0" data-show-print="1" data-show-email="1" data-orientation="0" data-version="1" data-bg-color="transparent"></div><script type="text/javascript">(function() {var s = document.getElementsByTagName("script")[0],rdb = document.createElement("script"); rdb.type = "text/javascript"; rdb.async = true; rdb.src = document.location.protocol + "//www.readability.com/embed.js"; s.parentNode.insertBefore(rdb, s); })();</script>
EOF;
	
	return  $my_print . $wp_title;
}
add_filter('the_content', 'add_readability_button');