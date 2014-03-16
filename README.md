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

How To Test Your Site?
----------------------

You can easily test your site to see if you are open to this vulnerability:

1. Install the Chrome extension [PostMan](http://www.getpostman.com/)
2. As your request URL, enter `http://YOUR-SITE-URL.com/xmlrpc.php`
3. Make sure you are doing a `POST`
4. Set your request body to be `RAW` with the following content:
```<methodCall>
  <methodName>pingback.ping</methodName>
  <params>
    <param><value><string>http://YOUR-SITE-URL.com</string></value></param>
    <param><value><string>http://YOUR-SITE-URL.com/hello-world/</string></value></param>
  </params>
</methodCall>```
5. Make sure the second param is a valid blog post that exists in your WordPress site
6. Send the request!

If you get back a response saying the pingback from `http://YOUR-SITE-URL.com` to `http://YOUR-SITE-URL.com/hello-world/` was registered, then your site is wide open. Here is a screenshot of POSTMAN:

![XMLRPC Pingback Enabled](https://raw.github.com/fooplugins/remove-xmlrpc-pingback-ping/master/xmlrpc_pingback_enabled.png)

After activating this plugin, sending through the same request as above should result in an error response from the website `server error. requested method pingback.ping does not exist.`, as seen in this screenshot:

![XMLRPC Pingback Disabled](https://raw.github.com/fooplugins/remove-xmlrpc-pingback-ping/master/xmlrpc_pingback_disabled.png)

Disclaimer
----------

I did not write this code. I just put it together in a plugin so more people can easily install and use it. Original code from wptavern.com and sucuri.net in the links above.
