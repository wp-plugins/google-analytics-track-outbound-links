<?php
/*
Plugin Name: Google Analytics Track Outbound Links
Version: 1.0
Plugin URI: http://riseofweb.com
Description: Track all outbound links Classic and Universal - Note: Google Analytics Code Must Be Already Installed
Author: Daniel Chase
Author URI: http://riseofweb.com
*/

function gaOutBound(){
	?><script type="text/javascript"><!--
	if (typeof jQuery != 'undefined') {
		jQuery(document).ready(function($) {
			jQuery('a').on('click', function(event) {
				var el = jQuery(this);
				var track = true;
				var href = (typeof(el.attr('href')) !== 'undefined' ) ? el.attr('href') :"";
				var target = (typeof(el.attr('target')) !== 'undefined' ) ? el.attr('target') :"";
				var isThisDomain = href.match(document.domain.split('.').reverse()[1] + '.' + document.domain.split('.').reverse()[0]);
				if (!href.match(/^javascript:/i)) {
					var elEv = []; elEv.value=0, elEv.non_i=false;
					if (href.match(/^https?\:/i) && !isThisDomain) {
						elEv.category = "external";
						elEv.action = "click";
						elEv.label = href.replace(/^https?\:\/\//i, '');
						elEv.non_i = true;
						elEv.loc = href;
					}
					else track = false;
					if (track) {
						if(window._gat){ //Classic
							_gaq.push(['_trackEvent', elEv.category.toLowerCase(), elEv.action.toLowerCase(), elEv.label.toLowerCase(), elEv.value, elEv.non_i]);
						}else{ //Universal
							ga('send','event', elEv.category.toLowerCase(),elEv.action.toLowerCase(),elEv.label.toLowerCase(),elEv.value);
						}
						if (target == "_blank"){
								window.open(elEv.loc);
						}else{
							setTimeout(function() {window.location.href = elEv.loc;}, 400);
						}
						if ( window.console && window.console.log ) {console.log ( 'Outbound: ' + elEv.label);}
						return false;
					}
				}
			});
		});
	}
	--></script><?php
}
add_action('wp_head','gaOutBound',99);
?>