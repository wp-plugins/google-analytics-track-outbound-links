=== Google Analytics Track Outbound Links ===
Contributors: riseofweb
Donate link: https://riseofweb.com/wordpress/
Tags: Google Analytics, Tracking, Outbound Links, track out links, exit traffic, record exit traffic
Requires at least: 3.5
Tested up to: 4.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Track your Google Analytics Outbound Traffic
== Description ==

Track your outbound links in Google Analytics.  This is compatible with both Classic and Universal Analytics Accounts.

= To see results in Google Analytics: =
In Google Analytics Reporting go to: *"Behavior"* -> *"Events"* -> *"Overview"* -> *"Event Label"*, here you will be able to see all of your website's outbound links.(See Screenshots)

= To set the outbound links as a goal in Google Analytics: =
(See Screenshots)
Event Category = "external"
Event Action = "click"
Event Label = (**leave this blank**)

If you need help with this plugin or WordPress design, plugins or themes, visit my website: [Rise of the Web](https://riseofweb.com).

== Installation ==

1. Upload folder to '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why are my links not showing in Google Analytics? =
Sometimes with Google Analytics events can take up to 24 hours to show in the reports.

= How can I test to see if the plugin is working in real time? =
View the Console in your browser's web development tools. After an outbound link is clicked, the Console will say: "Outbound: www.example.com"

= Do I need to add a goal in Google Analytics? =
No, that is optional.

= What do I use for adding a goal? =
Event Category = "external", Event Action = "click", Event Label = the outbound URL (so leave this blank. see the screenshot for setup example)

= I use Yoast Google Analytics, and this plugin does not work. Why? =
Yoast changes the Analytics JavaScript variable name for some reason or another. How to get this plugin to play frieldy with Yoast: Open up Yoast Google Analytics > Settings > Advanced tab and go down to the "Custom code:" field. Enter the following:
__gaTracker(function(){window.ga=__gaTracker;});

== Screenshots ==

1. This is how you can view your outbound links in Google Analytics
2. This is how to setup the outbound links as a goal in Google Analytics

== Changelog ==

= 1.0 =
* Inital Release