<?php
if( ! function_exists( 'rara_readable_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function rara_readable_register_custom_controls( $wp_customize ){
    
    // Load our custom control.
    require_once get_template_directory() . '/inc/custom-controls/note/class-note-control.php';
    require_once get_template_directory() . '/inc/custom-controls/select/class-select-control.php';
    require_once get_template_directory() . '/inc/custom-controls/slider/class-slider-control.php';
    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';
    require_once get_template_directory() . '/inc/custom-controls/typography/class-fonts.php';
    require_once get_template_directory() . '/inc/custom-controls/typography/class-typography-control.php';
    require_once get_template_directory() . '/inc/custom-controls/repeater/class-repeater-setting.php';
    require_once get_template_directory() . '/inc/custom-controls/repeater/class-control-repeater.php';
    require_once get_template_directory() . '/inc/custom-controls/sortable/class-sortable-control.php';
            
    // Register the control type.
    $wp_customize->register_control_type( 'Rara_Readable_Select_Control' );
    $wp_customize->register_control_type( 'Rara_Readable_Slider_Control' );
    $wp_customize->register_control_type( 'Rara_Readable_Toggle_Control' );
    $wp_customize->register_control_type( 'Rara_Readable_Typography_Control' ); 
    $wp_customize->register_control_type( 'Rara_Readable_Sortable' ); 
}
endif;
add_action( 'customize_register', 'rara_readable_register_custom_controls' );