Remove XMLRPC Pingback Ping
===========================

Prevent your WordPress install from participating in pingback denial of service attacks. 

From sucuri.net:

> Any WordPress site with Pingback enabled (which is on by default) can be used in DDOS attacks against other sites.

Learn More
----------

* [How To Prevent WordPress From Participating In Pingback Denial of Service Attacks](http://wptavern.com/how-to-prevent-wordpress-from-participating-in-pingback-denial-of-service-attacks) - wptavern.com
* [More Than 162,000 WordPress Sites Used for Distributed Denial of Service Attack](http://blog.sucuri.net/2014/03/more-than-162000-wordpress-sites-used-for-distributed-denial-of-service-attack.html) - sucuri.net
* [xmlrpc.php and Pingbacks and Denial of Service Attacks, Oh My!](http://hackguard.com/xmlrpc-php-ping-backs-hackers-denial-service-attacks) - hackguard.com

Is Your Site Attacking Others?
------------------------------

Use [Sucuri's WordPress DDOS Scanner](http://labs.sucuri.net/?is-my-wordpress-ddosing) to check if your site is DDOS’ing other websites

Why Not Just Disable XMLRPC Altogether?
---------------------------------------

Yes, you can choose to do that using the plugin [Disable XML-RPC](http://wordpress.org/plugins/disable-xml-rpc/), but if you use popular plugins like JetPack (that use XMLRPC) then those plugins will stop working 100%. That is why this small plugin exists.

Disclaimer
----------

I did not write this code. I just put it together in a plugin so more people can easily install and use it. Original code from wptavern.com and sucuri.net in the links above.