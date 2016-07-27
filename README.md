# Google Maps WordPress Plugin using Google JavaScript API

## Description

Add a Widget To Your Website that displays **Google Map** and a marker on it in the Widget section 


## Technology Used

- Coding: **HTML** & **PHP**
- Text Editor: **Brackets IDE**
- Local Host Webserver and Database: **XAMPP** or **WAMP**


### What is Needed To Run This Plugin? 

**Credential Google JavaScript API Key** is required before running this plugin.

Key can be obtained from: https://console.developers.google.com

It must be added @line-95
```javascript
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&signed_in=true&key='INSERT_KEY_HERE'"></script>
```

## How To Activate Plugin

- **Download** the Plugin
- **Extract** to any Folder

For **_XAMPP_** Users
- **Create** a Folder called *google-maps-widget-test* at **./XAMPP/htdocs/WordPress-Website/wp-content/plugins/**
- **Copy** *PHP file* to **./XAMPP/htdocs/WordPress-Website/wp-content/plugins/google-maps-widget-test**

OR For **_WAMP_** Users
- **Create** a Folder called *google-maps-widget-test* at **./WAMP/www/WordPress-Website/wp-content/plugins/**
- **Copy** *PHP file* to **./WAMP/www/WordPress-Website/wp-content/plugins/google-maps-widget-test**

Then
- **Open** any Browser
- **Open** the Website **http://localhost/WordPress-Website/wp-admin**
- **Enter** Administrator Credentials and Login
- Go to **Plugins** Tab
- **Activate** the **Google Maps Widget Test** Plugin


## Displaying The Map on Website

- Go To **Appearances**
- Click **Widgets**
- Click **Google Maps Widget**
- Set **Title**, **Latitute & Longitude** Co-ordinates
- Click **Save**
- Go to your **WordPress Website**


## Video Demonstration

Jing Video Link: http://screencast.com/t/00cHXzfG


## Result Screenshot

This is how your website will be displaying Google Maps using this plugin. Your Theme will decide how this Widget will look like.
![Google Maps Widget](http://i.imgur.com/eypmk9t.png)


## References

For More Reading Regarding Google Maps and its API go to: https://developers.google.com/maps/documentation/javascript/

Using Google API to display Google Maps Through Theme instead of Plugin: https://tommcfarlin.com/google-maps-api-and-wordpress/


## Contact

For Queries and Question you can PM me on:
- Facebook: http://facebook.com/fuNkyBRO1
- Email: k132089@nu.edu.pk
