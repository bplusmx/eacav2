<?php

// Custom post types
define('EACA_VENUES_SLUG', 'eaca_venues');
define('EACA_BUSINESS_DIRECTORY_SLUG', 'eaca_directory');
define('EACA_HOTELES_SLUG', 'eaca_hoteles');
define('EACA_EVENTS_SLUG', 'eaca_events');

// Taxonomies
define('EACA_TAXONOMY_CITY_ZONES_SLUG', 'eaca_city_zones');
define('EACA_TAXONOMY_BUSINESS_TYPE_SLUG', 'eaca_business_type');
define('EACA_TAXONOMY_HOTEL_CATEGORY_SLUG', 'eaca_hotel_category');
define('EACA_TAXONOMY_VENUE_OPERATOR_SLUG', 'eaca_venue_operator');
    

// Libraries
include 'taxonomies.php';
include 'business-directory.php';
include 'hotels.php';
include 'events.php';
include 'venues.php';
