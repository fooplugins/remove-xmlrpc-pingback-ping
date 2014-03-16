=== Remove XMLRPC Pingback Ping ===
Contributors: bradvin
Tags: xmlrpc
Requires at least: 3.5.1
Tested up to: 3.9
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Prevent your WordPress install from participating in pingback denial of service attacks. 

== Description ==

Prevent your WordPress install from participating in pingback denial of service attacks. 

From sucuri.net:

> Any WordPress site with Pingback enabled (which is on by default) can be used in DDOS attacks against other sites.

= Learn More =

* [How To Prevent WordPress From Participating In Pingback Denial of Service Attacks](http://wptavern.com/how-to-prevent-wordpress-from-participating-in-pingback-denial-of-service-attacks) - wptavern.com
* [More Than 162,000 WordPress Sites Used for Distributed Denial of Service Attack](http://blog.sucuri.net/2014/03/more-than-162000-wordpress-sites-used-for-distributed-denial-of-service-attack.html) - sucuri.net
* [xmlrpc.php and Pingbacks and Denial of Service Attacks, Oh My!](http://hackguard.com/xmlrpc-php-ping-backs-hackers-denial-service-attacks) - hackguard.com

= Is Your Site Attacking Others? =

Use [Sucuri's WordPress DDOS Scanner](http://labs.sucuri.net/?is-my-wordpress-ddosing) to check if your site is DDOS’ing other websites

= Why Not Just Disable XMLRPC Altogether? =

Yes, you can choose to do that using the plugin [Disable XML-RPC](http://wordpress.org/plugins/disable-xml-rpc/), but if you use popular plugins like JetPack (that use XMLRPC) then those plugins will stop working 100%. That is why this small plugin exists.

= How To Test Your Site? =

Follow the steps in the [GitHub repo](https://github.com/fooplugins/remove-xmlrpc-pingback-ping#how-to-test-your-site)

= Disclaimer =

I did not write this code. I just put it together in a plugin so more people can easily install and use it. Original code from wptavern.com and sucuri.net in the links above.

== Installation ==

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'Remove XMLRPC Pingback Ping'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `remove-xmlrpc-pingback-ping.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `remove-xmlrpc-pingback-ping.zip`
2. Extract the `remove-xmlrpc-pingback-ping` directory to your computer
3. Upload the `remove-xmlrpc-pingback-ping` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

== Screenshots ==

1. POSTMAN: Without the plugin installed
2. POSTMAN: With the plugin installed

== Frequently Asked Questions ==

= Is My Site Attacking Others? =

It could be! Use [Sucuri's WordPress DDOS Scanner](http://labs.sucuri.net/?is-my-wordpress-ddosing) to check if your site is DDOS’ing other websites

== Changelog ==

= 1.0.0 =
* First release