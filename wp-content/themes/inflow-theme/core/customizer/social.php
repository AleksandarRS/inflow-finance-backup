<?php
/*Social icons section */
$wp_customize->add_section( 'social_icons', array(
	'title'    => __( 'Social', 'inflow' ),
	'priority' => 260,
) );

/*Facebook section */
$wp_customize->add_setting( 'social_customizer_fb_icon', array(
	'sanitize_callback' => 'sanitize_image'
) );
$wp_customize->add_setting( 'social_customizer_fb_url', array(
	'default'           => 'https://www.facebook.com/',
	'sanitize_callback' => 'text_sanitize',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'facebook_icon', array(
	'label'    => __( 'Upload Facebook Icon', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_fb_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_url', array(
	'label'    => __( 'Facebook URL', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_fb_url',
) ) );
/*Twitter section */
$wp_customize->add_setting( 'social_customizer_tw_icon', array(
	'sanitize_callback' => 'sanitize_image'
) );
$wp_customize->add_setting( 'social_customizer_tw_url', array(
	'default'           => 'https://twitter.com/',
	'sanitize_callback' => 'text_sanitize',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'twitter_icon', array(
	'label'    => __( 'Upload Twitter Icon', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_tw_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_url', array(
	'label'    => __( 'Twitter URL', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_tw_url',
) ) );
/*Google section */
$wp_customize->add_setting( 'social_customizer_g_icon', array(
	'sanitize_callback' => 'sanitize_image'
) );
$wp_customize->add_setting( 'social_customizer_g_url', array(
	'default'           => 'https://www.tiktok.com/',
	'sanitize_callback' => 'text_sanitize',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'google_icon', array(
	'label'    => __( 'Upload TikTok', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_g_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google_url', array(
	'label'    => __( 'TikTok', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_g_url',
) ) );
/*Instagram section */
$wp_customize->add_setting( 'social_customizer_instagram_icon', array(
	'sanitize_callback' => 'sanitize_image'
) );
$wp_customize->add_setting( 'social_customizer_instagram_url', array(
	'default'           => 'http://instagram.com/',
	'sanitize_callback' => 'text_sanitize',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'instagram_icon', array(
	'label'    => __( 'Upload Instagram Icon', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_instagram_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_url', array(
	'label'    => __( 'Instagram URL', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_instagram_url',
) ) );
/*LinkedIn section */
$wp_customize->add_setting( 'social_customizer_lni_icon', array(
	'sanitize_callback' => 'sanitize_image'
) );
$wp_customize->add_setting( 'social_customizer_lni_url', array(
	'default'           => 'https://www.linkedin.com/',
	'sanitize_callback' => 'text_sanitize',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'linkedin_icon', array(
	'label'    => __( 'Upload LinkedIn Icon', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_lni_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin_url', array(
	'label'    => __( 'LinkedIn URL', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_lni_url',
) ) );

/*Youttube section */
$wp_customize->add_setting( 'social_customizer_youtube_icon', array(
	'sanitize_callback' => 'sanitize_image'
) );
$wp_customize->add_setting( 'social_customizer_youtube_url', array(
	'default'           => 'https://www.youtube.com/',
	'sanitize_callback' => 'text_sanitize',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'social_customizer_youtube_icon', array(
	'label'    => __( 'Upload Youtube Icon', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_youtube_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_customizer_youtube_url', array(
	'label'    => __( 'Youtube URL', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_youtube_url',
) ) );


/*Pinterest section */
$wp_customize->add_setting( 'social_customizer_pinterest_icon', array(
	'sanitize_callback' => 'sanitize_image'
) );
$wp_customize->add_setting( 'social_customizer_pinterest_url', array(
	'default'           => 'https://www.pinterest.com/',
	'sanitize_callback' => 'text_sanitize',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'social_customizer_pinterest_icon', array(
	'label'    => __( 'Upload Pinterest Icon', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_pinterest_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_customizer_pinterest_url', array(
	'label'    => __( 'Pinterest URL', 'inflow' ),
	'section'  => 'social_icons',
	'settings' => 'social_customizer_pinterest_url',
) ) );

?>