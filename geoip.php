<?php
/*
Plugin Name: John Gamboa's GeoTarget Redirect Example
Description: Redirecting visitor traffic based on geo-location using the WPEngine GeoTarget feature
Version: 1.1
License: GPLv2
*/

function country_region_geo_redirect() {

$country = getenv('HTTP_GEOIP_COUNTRY_CODE');
$region = getenv('HTTP_GEOIP_REGION')

if ( $country == "AU" and $region == "07") {

wp_redirect( 'http://domain.com/melbourne', 301 );

     exit;

} else if ( $country == "AU" and $region !== "07" ) {

wp_redirect( 'http://domain.com/', 301 );

     exit;

}else if ( $country !== "AU" ) {

wp_redirect( 'https://www.youtube.com/watch?v=RD3icaZLp6Q', 301 );

     exit;

}

}

add_action('init', 'country_region_geo_redirect');
