<?php 
defined( 'ABSPATH' ) || exit;


// Typography sections start

Redux::set_section(
	$opt_name,
	array(
		'title'  => esc_html__( 'Page', 'restaurant-site' ),
		'id'     => '_page-typography',
		'desc'   => esc_html__( 'Typography settings', 'restaurant-site' ),
      'customizer_width' => '450',
      'subsection' => true,      
		'icon'   => 'el el-font',
		'fields' => array(
         array(
            'id'        => 'title_site-typography-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Title Site', 'restaurant-site' ),
            'subtitle'  => 'Set typography for title site',
            'position'  => 'start',    
            ),

            array(
               'id'                => 'title_site-typography',
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
                  'color'       => '#647786',
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
               'output'            => array( '.redux_font-title_site' ),
            ),

         array(
            'id'        => 'title_site-typography-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),
         
         
         
         array(
            'id'        => 'heder-navigation-typography-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Header Navigation', 'restaurant-site' ),
            'subtitle'  => 'Set typography for header navigation',
            'position'  => 'start',    
            ),

            array(
               'id'                => 'heder-navigation-typography',
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
                  'color'       => '#647786',
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
               'output'            => array( '' ),
            ),

         array(
            'id'        => 'heder-typography-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),
		),
	)
);
