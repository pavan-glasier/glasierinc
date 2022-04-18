=== IP2Location Tags ===
Contributors: IP2Location
Donate link: http://www.ip2location.com
Tags: geolocation, geo-targeting, localized content, ip2location, ip country, ip region, iso3166, ip location, customize content, ipv4, ipv6
Requires at least: 2.0
Tested up to: 5.9
Stable tag: 2.12.2

Displays visitor’s geolocation information, geo-targeting and customize the page content for different countries based on users location.

== Description ==

IP2Location Tags helps you to serve specific content to website visitors based on geographic location for different countries and regions via IP address lookup.

This plugin provides a relatively easy way to detect visitors’ IP addresses and translate it into geolocation information, and then keep visitors better engaged with localized information or content that’s most relevant to them.


Key Features

* Displays visitor’s’ information such as
	* Country code
	* Country name
	* Country flag
	* Region name
	* City name
	* Latitude and longitude
	* ZIP code
	* ISP
	* Domain name
	* Time zone
	* Net speed
	* IDD code
	* Area code
	* Weather station code & name
	* MNC, MCC, mobile carrier name
	* Elevation
	* Usage type
	* Address type
	* Category
* Customize the page content based on country or region
* Supports IPv4 and IPv6

This plugin supports both IP2Location IP geolocation BIN data and web service for IP geolocation lookup. If you are using the BIN data, you can update the BIN data every month by using the wizard on the settings page for the most accurate result. Alternatively, you can also manually download and update the BIN data file using the below links:

BIN file download: [IP2Location Commercial database](http://ip2location.com "IP2Location commercial database") | [IP2Location LITE database (free edition)](http://lite.ip2location.com "IP2Location LITE database (free edition)")

If you are using the IP2Location IP geolocation web service, please visit [IP2Location Web Service](http://www.ip2location.com/web-service "IP2Location Web Service") for details.

= Get visitor's location information with Variable Tag =
*Usage example*

Display visitor's IP address, country name, region name and city name.
*Your IP is {ip:ipAddress}*
*You are in {ip:countryName}, {ip:regionName}, {ip:cityName}*

= Geo-targeting: Customize the post content with IP2Location Tag =
**Syntax to show content for specific country**
*[ip:XX[,XX]..[,XX]]Your content here.[/ip]*
Note: XX is a two-character ISO-3166 country code.

*Example*
To show the content for United States or Canada visitors only.
*[ip:US,CA]Only visitors from United States or Canada can view this line.[/ip]*

**Syntax to show content for specific country and region**
*[ip:XX:YY[,XX:YY]..[,XX:YY]]Your content here.[/ip]*
Note: XX is a two-character ISO-3166 country code and YY is a ISO-3166-2 sub-division code.

*Example*
*To show the content for California or New York visitors only.*
*[ip:US:CA,US:NY]Only visitors from California or New York can view this line.[/ip]*

**Syntax to hide the content from specific country**
*[ip:\*,-XX[,-XX]..[,-XX]]Your content here.[/ip]*
Note: XX is a two-character ISO-3166 country code.

*Example*
All visitors will be able to see the line except visitors from Vietnam.
*[ip:\*,-VN]All visitors will be able to see this line except visitors from Vietnam.[/ip]*

**Syntax to hide the content from specific country and region**
*[ip:\*,-XX:YY[,-XX:YY]..[,-XX:YY]]Your content here.[/ip]*
Note: XX is a two-character ISO-3166 country code and YY is a ISO-3166-2 sub-division code.

*Example*
All visitors will be able to see the line except visitors from California.
*[ip:\*,-US:CA]All visitors will be able to see this line except visitors from California.[/ip]*

= More Information =
Please visit us at [https://www.ip2location.com](https://www.ip2location.com "https://www.ip2location.com")

== Screenshots ==

1. IP2Location Tags setting page
2. IP2Location Tags shortcode display

== Installation ==

1. Upload `ip2location` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Download the latest BIN database at settings page.
4. You can now start using IP2Location tag to customize your post content.

Please take note that this plugin requires minimum **PHP version 5.4**.

== Changelog ==
* 2.12.2 Fixed missing country flags.
* 2.12.1 Enhanced checking.
* 2.12.0 Updated IP2Location library.
* 2.11.1 Tested up to WordPress 5.9.
* 2.11.0 Added new address type and category fields.
* 2.10.7 Fixed pop up not closing.
* 2.10.6 Tested up to WordPress 5.8.
* 2.10.5 Fixed lookup issues with Web service.
* 2.10.4 Tested up to WordPress 5.7.
* 2.10.3 Fixed file permission issues for some users.
* 2.10.2 Fixed error reading database file.
* 2.10.1 Removed built-in database.
* 2.10.0 Added setup wizard.
* 2.9.3 Fixed error when results are not available.
* 2.9.2 Tested up to WordPress 5.6.
* 2.9.1 Removed deprecated functions.
* 2.9.0 Updated file structures to use composer for IP2Location libraries.
* 2.8.10 Tested with WordPress 5.5.
* 2.8.9 Fixed deprecation warning.
* 2.8.8 Tested with WordPress 5.4.
* 2.8.7 Fixed typo.
* 2.8.6 Minor fixes.
* 2.8.5 Added feedback request.
* 2.8.4 Tested with WordPress 5.3.2.
* 2.8.3 Updated IP2Location library to 8.1.0.
* 2.8.2 Updated documentation links.
* 2.8.1 Tested up to WordPress 5.1.1.
* 2.8.0 Upgraded IP2Location API to v2.
* 2.7.1 Added error message when IP2Location database is missing or corrupted.
* 2.7.0 Added debug log.
* 2.6.1 Minor changes.
* 2.6.0 IP2Location database update changed to use download token.
* 2.5.1 Fixed conflicts when multiple IP2Location plugins installed.
* 2.5.0 Use IP2Location PHP 8.0.2 library for lookup.
* 2.4.9 Support countryFlag feature.
* 2.4.8 Fixed uninstall function.
* 2.4.7 Prevent settings lost when deactivate/activate the plugin.
* 2.4.6 Fixed minor bug.
* 2.4.5 Use latest IP2Location library and updated the setting page.
* 2.4.4 Tested with WordPress 4.4.
* 2.4.3 Fixed issue when testing in local machine.
* 2.4.2 Fixed issue when matching region/state.
* 2.4.11 Use latest IP2Location library for lookup.
* 2.4.10 Fixed close sticky information panel issue.
* 2.4.0 Fixed various performance issues. Added IP2Location Web service support.
* 2.3.3 Support the customization of the contents based on region/state.
* 2.3.2 Fixed compatibilities with widgets.
* 2.3.1 Fixed minors issues and WordPress standards.
* 2.3.0 Fixed crashed with other IP2Location plugins.
* 2.2.0 Support database downloading on settings page. Support bracket [] to define the tag rule in addition to &lt;&lgt;, to solve of issue of being treated as script tag by wordpress.
* 2.1.0 Initial release.
