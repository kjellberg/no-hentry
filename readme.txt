=== Hatom/hentry remover (Fixes errors in Google Webmaster Tools) ===
Contributors: rkjellberg
Tags: remove hentry, fix google webmaster tools errors, hentry errors fixer, hatom fixer, hatom webmaster tools
Requires at least: 3.7
Tested up to: 4.4.2
Stable tag: 1.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Remove .hentry-class with a post_class-filter to get rid of errors in Google Webmaster Tools. 
This will NOT work with Twenty T*-themes or other themes where the .hentry-class is used for CSS-styling... 

== Installation ==

1. Upload the entire `no-hentry` folder to the `/wp-content/plugins/` directory or download it from Plugins in WordPress Dashboard.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 1.2.1 =
*Release Date - 6 mars 2016*

- First commit :) 

== Frequently Asked Questions ==
= Can this help me to remove errors in Google Webmaster Tools =
Yes, if the errors is related to the .hentry tag. 

= Why is my theme fucked up without the .hentry tag? =
Because your theme is using the .hentry class for css-styling. This bug is found in many themes including the Wordpress default Twenty T* themes before Twenty Sixteen. Change theme or deal with it :) 