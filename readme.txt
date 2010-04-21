=== Google Analytics Tracking Code Embeder ===
Contributors: penuel
Tags: google, google analytics, GA tracking code
Requires at least: 2.5
Tested up to: 2.9.2
Author URI: http://www.mixedwaves.com
Plugin URI: http://www.mixedwaves.com/google-analytics-tracking-code-embeder/
Stable tag: trunk


This simple plugin dynamically embeds your Google Analytics Tracking Code in your Wordpress theme.

== Description ==

This is a small easy plugin that embeds your Google Analytics Tracking Code inside your theme files dynamically without you needing to hard-code it in your template files.

This is pretty useful if you frequently change your Wordpress Theme files, and now you don’t need to worry about leaving out your Google Analytics code accidently just because you switched to a new theme.

== Installation ==

This section describes how to install the plugin and get it working.

1. Download the plugin and upload and unzip to your plugins directory as you would usually do.
1. Activate the plugin from your Wordpress Admin.
1. Go to the plugin’s options page to add your Google Analytics Tracking Code. You can find the options page under Settings >> GA Tracking Code
1. Save your changes. You have now successfully added your GA tracking code, and it will be automatically added to all your blog pages.
1. To verify if your Google Analytics Tracking code has been added correctly, go to any of your blog page and View the source of your page. If the plugin is working correctly you should be able to see your Google Analytics tracking code near to the end of the page (near to the closing </body> tag). If you don’t find your Google Analytics code, please refer to the Prerequisites section below.

== Prerequisites ==

The plugin requires that your theme files have an action/template tag

`<?php wp_footer(); ?>`

While this action is widely supported by most of the theme authors, chances are there that this action is not available in your theme file. In such a case, the plugin won’t be able to embed the Google Analytics tracking code to your theme.

However, you can easily edit your footer.php file and add the above action (php code snippet/template tag) towards the end of the file, just before the closing </body> tag.