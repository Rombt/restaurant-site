<?php 
defined( 'ABSPATH' ) || exit;


// Typography sections start

Redux::set_section(
	$opt_name,
	array(
		'title'  => esc_html__( 'Contact Us Page', 'restaurant-site' ),
		'id'     => 'contact_us-page-typography',
		'desc'   => esc_html__( 'Typography settings', 'restaurant-site' ),
      'customizer_width' => '450',
      'subsection' => true,      
		'icon'   => 'el el-font',
		'fields' => array(
            array(
               'id'                => 'get_in_touch_title-typography',
               'title'  => esc_html__( 'Title of "Get in Touch" Section', 'restaurant-site' ),
               'type'              => 'typography',
               'google'            => true,
               'font_family_clear' => false,
               'color_alpha'       => true,
               'margin-top'        => true,
               'margin-bottom'     => true,
               'text-transform'     => true,
               'letter-spacing'     => true,
               'word-spacing'     => true,
               'line-height'     => true,
               'text-shadow'       => true,
               'default'           => array(
                  'color'       => '#000000',
                  'font-size'   => '',
                  'font-family' => '',
                  'font-weight' => '',
                  'font-style'  => '',
                  'line-height' => '',
                  'margin-top'    => '',
                  'margin-bottom' => '',
                  'shadow-color'       => '',
                  'shadow-horizontal'  => '0',
                  'shadow-vertical'  => '0',
                  'shadow-blur'  => '0',
               ),
               'output'            => array( '.contact-us__touch h2' ),
            ),
            array(
               'id'                => 'get_in_touch_form-typography',
               'title'  => esc_html__( 'Label of form the "Get in Touch" Section', 'restaurant-site' ),
               'type'              => 'typography',
               'google'            => true,
               'font_family_clear' => false,
               'color_alpha'       => true,
               'margin-top'        => true,
               'margin-bottom'     => true,
               'text-transform'     => true,
               'letter-spacing'     => true,
               'word-spacing'     => true,
               'line-height'     => true,
               'text-shadow'       => true,
               'default'           => array(
                  'color'       => '#363d43',
                  'font-size'   => '',
                  'font-family' => '',
                  'font-weight' => '',
                  'font-style'  => '',
                  'line-height' => '',
                  'margin-top'    => '',
                  'margin-bottom' => '',
                  'shadow-color'       => '',
                  'shadow-horizontal'  => '0',
                  'shadow-vertical'  => '0',
                  'shadow-blur'  => '0',
               ),
               'output'            => array( '.form__input p' ),
            ),
            array(
               'id'                => 'get_in_touch_button-typography',
               'title'  => esc_html__( 'Label of button the "Get in Touch" Section', 'restaurant-site' ),
               'type'              => 'typography',
               'google'            => true,
               'font_family_clear' => false,
               'color_alpha'       => true,
               'margin-top'        => true,
               'margin-bottom'     => true,
               'text-transform'     => true,
               'letter-spacing'     => true,
               'word-spacing'     => true,
               'line-height'     => true,
               'text-shadow'       => true,
               'default'           => array(
                  'color'       => '#ffffff',
                  'font-size'   => '',
                  'font-family' => '',
                  'font-weight' => '',
                  'font-style'  => '',
                  'line-height' => '',
                  'margin-top'    => '',
                  'margin-bottom' => '',
                  'shadow-color'       => '',
                  'shadow-horizontal'  => '0',
                  'shadow-vertical'  => '0',
                  'shadow-blur'  => '0',
               ),
               'output'            => array( '.contact-us__touch .button-orange'  ),
            ),            
            array(
               'id'                => 'title-our-address-typography',
               'title'  => esc_html__( 'Title of "Our Address" Section', 'restaurant-site' ),
               'type'              => 'typography',
               'google'            => true,
               'font_family_clear' => false,
               'color_alpha'       => true,
               'margin-top'        => true,
               'margin-bottom'     => true,
               'text-transform'     => true,
               'letter-spacing'     => true,
               'word-spacing'     => true,
               'line-height'     => true,
               'text-shadow'       => true,
               'default'           => array(
                  'color'       => '#ffffff',
                  'font-size'   => '',
                  'font-family' => '',
                  'font-weight' => '',
                  'font-style'  => '',
                  'line-height' => '',
                  'margin-top'    => '',
                  'margin-bottom' => '',
                  'shadow-color'       => '',
                  'shadow-horizontal'  => '0',
                  'shadow-vertical'  => '0',
                  'shadow-blur'  => '0',
               ),
               'output'            => array( '.contact-us__address h2'  ),
            ),
            array(
               'id'                => 'text-our-address-typography',
               'title'  => esc_html__( 'Text of "Our Address" Section', 'restaurant-site' ),
               'type'              => 'typography',
               'google'            => true,
               'font_family_clear' => false,
               'color_alpha'       => true,
               'margin-top'        => true,
               'margin-bottom'     => true,
               'text-transform'     => true,
               'letter-spacing'     => true,
               'word-spacing'     => true,
               'line-height'     => true,
               'text-shadow'       => true,
               'default'           => array(
                  'color'       => '#ffffff',
                  'font-size'   => '',
                  'font-family' => '',
                  'font-weight' => '',
                  'font-style'  => '',
                  'line-height' => '',
                  'margin-top'    => '',
                  'margin-bottom' => '',
                  'shadow-color'       => '',
                  'shadow-horizontal'  => '0',
                  'shadow-vertical'  => '0',
                  'shadow-blur'  => '0',
               ),
               'output'            => array( '.contact-us__address div'  ),
            ),
		),
	)
);
