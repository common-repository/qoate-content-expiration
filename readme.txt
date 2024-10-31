=== Plugin Name ===
Contributors: DvanKooten
Donate link: http://dannyvankooten.com/donate/
Tags: expiration,date,link expiration,content expiration,replace text after
Requires at least: 2.0
Tested up to: 3.1
Stable tag: 1.3

Automatically replaces anything you want with a custom message after an expiration date

== Description ==

= Post Content Expiration =

This plugin lets you put certain content between tags, so it will expire after a given date.
You can set the date in an added metabox below the post editor.
After the content has expired it will be replaced with a custom message which you can set individually for each post.

If you want certain content to expire just put it between `[exp]` and `[/exp]` and set a valid expiration date (dd/mm/yy).
After the expiration date your custom expiration message will show up, instead of the original content between the tags.

You can also have custom messages, time or dates for content in the same post. Those will overrule the given dates/messages in the box under the post editor.
Valid attributes are `message="This is a custom message for this line"` , `date="03/08/2010"` , `time="13:54:00"`. 
Use the quotes and exact same formats as the examples above, so dates like `dd/mm/yyyy` and time like `hh:mm:ss`. 

More info:

* [Post Content Expiration](http://dannyvankooten.com/wordpress-plugins/post-content-expiration/)
* Read more great [WordPress tips](http://dannyvankooten.com/) to get the most out of your website
* Check out more [WordPress plugins](http://dannyvankooten.com/wordpress-plugins/) by the same author

== Installation ==

Follow the instruction on the [Qoate Content Expiration](http://dannyvankooten.com/wordpress-plugins/post-content-expiration/) page.


== Frequently Asked Questions ==

= At what time of the date does the content expire? =
If you didn't specify a time attribute this will happen at 00:00. You can specify time attributes though that will make it expire at your desired time.
Add the attributes like this to your shortcode: `[exp time="hh:mm:ss"]`.

= Let's say I have a list of multiple events, that expire at different dates.. =
Pretty easy, just set different `date` attributes for each event, like this:
`[exp date="dd/mm/yy"]Event 1[/exp]`
`[exp date="dd/mm/yy"]Event 2[/exp]`

= Ok, what about different messages? =
`[exp message="A custom message"]`

= Thanks! =
You're welcome. Make sure to visit the [Qoate Content Expiration](http://dannyvankooten.com/wordpress-plugins/post-content-expiration/) page on my website for more awsome tips.


== Changelog ==
= 1.3 = 
Plugin structure updated, now uses classes and PHP5 for better compatibility.

= 1.2 = 
Fixed a typo where the text box did not appear below the page editor.

= 1.1 = 
Added time, date and message attributes to override the general settings (if given).

= 1.0 =
* Stable release.