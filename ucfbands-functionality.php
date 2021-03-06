<?php
/*
Plugin Name: UCFBands Theme Functionality
Plugin URI:  http://ucfbands.com/
Description: Custom post types, shortcodes, and other functionality for the UCFBands Genesis child theme.
Version:     2.0
Author:      Jordan Pakrosnis
Author URI:  http://JordanPak.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


//==================//
//  BANDS TAXONOMY  //
//==================//

// Register Bands Taxonomy
require_once( 'bands.php' );


//===================//
//  DASHBOARD SETUP  //
//===================//

// Global Admin Styles
require_once( 'admin/styles/global.php' );

// Admin Menu
//require_once( 'admin/menu.php' );

// Admin Dashboard
//require_once( 'admin/dashboard.php' );



//==============================//
//  CONTENT TYPES & SHORTCODES  //
//==============================//

// ANNOUNCEMENT
require_once( 'announcement/announcement-cpt.php' );
require_once( 'announcement/announcement-shortcode.php' );


// SCHEDULE
require_once( 'schedule/schedule-cpt.php' );
require_once( 'schedule/schedule-cmb2.php' );
require_once( 'schedule/schedule-logic.php' );
require_once( 'schedule/schedule-shortcode.php' );


// LOCATION
require_once( 'location/location-cpt.php' );
require_once( 'location/location-cmb2.php' );
require_once( 'location/location-logic-get-meta.php' );
require_once( 'location/location-logic-parse-address.php' );
require_once( 'location/location-logic-google-map.php' );
require_once( 'location/location-get-location.php' );


// EVENT
require_once( 'event/event-cpt.php' );
require_once( 'event/event-cmb2.php' );
require_once( 'event/event-shortcode.php' );
require_once( 'event/event-logic-build-query.php' );
require_once( 'event/event-logic-none-found.php' );
require_once( 'event/event-logic-get-meta.php' );
require_once( 'event/event-logic-date-badge.php' );
require_once( 'event/event-logic-time.php' );
require_once( 'event/event-logic-events-listing.php' );
require_once( 'event/event-logic-program.php' );


// REHEARSAL SCHEDULE
require_once( 'rehearsal-schedule/rehearsal-schedule-cpt.php' );
require_once( 'rehearsal-schedule/rehearsal-schedule-cmb2.php' );
require_once( 'rehearsal-schedule/rehearsal-logic-get-meta.php' );
require_once( 'rehearsal-schedule/rehearsal-logic-schedule.php' );
require_once( 'rehearsal-schedule/rehearsal-schedule-shortcode.php' );
require_once( 'rehearsal-schedule/rehearsal-admin.php' );


// STAFF MEMBER
require_once( 'staff-member/staff-member-cpt.php' );
require_once( 'staff-member/staff-member-cmb2.php' );
require_once( 'staff-member/staff-get-meta.php' );


// SHORTCODE ONLY
require_once( 'shortcode-only/button-shortcode.php' );
require_once( 'shortcode-only/content-box-shortcode.php' );
require_once( 'shortcode-only/hero-shortcode.php' );
require_once( 'shortcode-only/ucfbands-gallery-shortcode.php' );
require_once( 'shortcode-only/foogallery-archive-shortcode.php' );
require_once( 'shortcode-only/fg-archive-link-shortcode.php' );


//==============//
//  FUTURE DEV  //
//==============//

// Block
// Photo Gallery & Photo Galleries
// Pep Band & Pep Band Listing
