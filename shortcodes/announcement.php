<?php
/*
 *  UCFBands Theme Functionality
 *  Shortcode: Announcements
 *    
 *  @author Jordan Pakrosnis
*/


/**
 * UCFBands Shortcode: Announcements
 *
 * @author Jordan Pakrosnis
 */
function ucfbands_shortcode_announcements( $atts ) {
    
    
    //-- ATTRIBUTES --//
	$atts = shortcode_atts( array(
        'num'       => '3',     // Number of announcements to show
        'heading'   => 'yes',   // Show "Announcements" Heading
        'button'    => 'yes',   // Show "View All" Button next to heading 
	), $atts, 'announcements' );

    
    
    //-- SET VARS --//
    
    // Attributes
    $announcements_num =        $atts['num'];
    $announcements_heading =    $atts['heading'];
    $announcements_button =     $atts['button'];
        
    // Output
    $shortode_output = '';
    
    
    
    //=========//
    //  LOGIC  //
    //=========//
    
    
    //-- CLASSES --//
    
    // Default
//    $button_classes .= 'button ';
    
    
    
    //==========//
    //  OUTPUT  //
    //==========//
    
    // Start Opening Tag
    $shortcode_output .= '<a ';
    
    

    
    // Closing Tag
    $shortcode_output .= '</a>';
    
    
    // Return Output String
	return $shortcode_output;
    
} // ucfbands_shortcode_announcement()

// Register the shortcode
add_shortcode( 'button', 'ucfbands_shortcode_announcements' );
