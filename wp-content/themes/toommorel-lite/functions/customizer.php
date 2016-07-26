<?php
class Toommorel_Customizer {
    public static function Toommorel_Register($wp_customize) {
        self::Toommorel_Sections($wp_customize);
        self::Toommorel_Controls($wp_customize);
    }
    public static function Toommorel_Sections($wp_customize) {
        /**
         * General Section
         */
        $wp_customize->add_section('general_setting_section', array(
            'title' => __('General Settings', 'toommorel-lite'),
            'description' => __('Allows you to Contact Info, Menu Text etc settings for Toommorel Theme.', 'toommorel-lite'), //Descriptive tooltip
            'panel' => '',
            'priority' => '10',
            'capability' => 'edit_theme_options'
            )
        );
        /**
         * Home Page Top Feature Area
         */
        $wp_customize->add_section('home_top_feature_area', array(
            'title' => __('Top Feature Area', 'toommorel-lite'),
            'description' => __('Allows you to setup Top feature area section for Toommorel Theme.', 'toommorel-lite'), //Descriptive tooltip
            'panel' => '',
            'priority' => '11',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Style Section
         */
        $wp_customize->add_section('style_section', array(
            'title' => __('Style Setting', 'toommorel-lite'),
            'description' => __('Allows you to setup Styling Section for Toommorel Theme.', 'toommorel-lite'),
            'panel' => '',
            'priority' => '12',
            'capability' => 'edit_theme_options'
                )
        );
         $wp_customize->remove_section("colors");
    }
    public static function Toommorel_Section_Content() {
        $section_content = array(
            'general_setting_section' => array(
                'inkthemes_logo',
                'inkthemes_favicon',
                'inkthemes_bodybg'
            ),
            'home_top_feature_area' => array(
                'inkthemes_slideimage1',
                'inkthemes_slideheading1',
                'inkthemes_slidedescription1',
                'inkthemes_slidebuttontext1',
                'inkthemes_slidelink1'
            ),          
             'style_section' => array(
                'inkthemes_customcss'
            )
        );
        return $section_content;
    }

    public static function Toommorel_Settings() {
        $toommorel_settings = array(
            'inkthemes_logo' => array(
                'id' => 'inkthemes_options[inkthemes_logo]',
                'label' => __('Custom Logo', 'toommorel-lite'),
                'description' => __('Choose your own logo. Optimal Size: 170px Wide by 30px Height', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/logo.png'
            ),
            'inkthemes_favicon' => array(
                'id' => 'inkthemes_options[inkthemes_favicon]',
                'label' => __('Custom Favicon', 'toommorel-lite'),
                'description' => __('Here you can upload a Favicon for your Website. Specified size is 16px x 16px.', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),     
            'inkthemes_bodybg' => array(
                'id' => 'inkthemes_options[inkthemes_bodybg]',
                'label' => __('Body Background Image', 'toommorel-lite'),
                'description' => __('Select image to change your website background', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),  
            'inkthemes_slideimage1' => array(
                'id' => 'inkthemes_options[inkthemes_slideimage1]',
                'label' => __('Top Feature Image', 'toommorel-lite'),
                'description' => __('Choose Image for your Top Section. Optimal Size: 450px x 350px', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/slideimg.png'
            ),
            'inkthemes_slideheading1' => array(
                'id' => 'inkthemes_options[inkthemes_slideheading1]',
                'label' => __('Top Feature Heading', 'toommorel-lite'),
                'description' => __('Mention the heading for the Top Feature.', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Video chat with a friend', 'toommorel-lite')
            ),
            'inkthemes_slidedescription1' => array(
                'id' => 'inkthemes_options[inkthemes_slidedescription1]',
                'label' => __('Top Feature Heading', 'toommorel-lite'),
                'description' => __('Description for Top Section.', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Video chat with a friend, ping a colleague, or give someone a ring - all without leaving your inbox', 'toommorel-lite')
            ),
             'inkthemes_slidebuttontext1' => array(
                'id' => 'inkthemes_options[inkthemes_slidebuttontext1]',
                'label' => __('Link Text for Top Feature', 'toommorel-lite'),
                'description' => __('Mention the link text for top Feature Image', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => __('Read More', 'toommorel-lite')
            ),  
            'inkthemes_slidelink1' => array(
                'id' => 'inkthemes_options[inkthemes_slidelink1]',
                'label' => __('Link for Top Feature Image', 'toommorel-lite'),
                'description' => __('Mention the URL for first image.', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),                     
            'inkthemes_customcss' => array(
                'id' => 'inkthemes_options[inkthemes_customcss]',
                'label' => __('Custom CSS', 'toommorel-lite'),
                'description' => __('Quickly add your custom CSS code to your theme by writing the code in this block.', 'toommorel-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),            
         );
        return $toommorel_settings;
    }
    public static function Toommorel_Controls($wp_customize) {
        $sections = self::Toommorel_Section_Content();
        $settings = self::Toommorel_Settings();
        foreach ($sections as $section_id => $section_content) {
            foreach ($section_content as $section_content_id) {
                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'toommorel_sanitize_url');
                        $wp_customize->add_control(new WP_Customize_Image_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;
                    case 'text':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'toommorel_sanitize_text');
                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;
                    case 'textarea':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'toommorel_sanitize_textarea');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;
                    case 'link':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'toommorel_sanitize_url');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));

                        break;
                    default:
                        break;
                }
            }
        }
    }
  public static function add_setting($wp_customize, $setting_id, $default, $type, $sanitize_callback) {
        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array('Toommorel_Customizer', $sanitize_callback),
            'type' => $type
                )
        );
    }
    /**
     * adds sanitization callback funtion : textarea
     * @package Toommorel
     */
    public static function toommorel_sanitize_textarea($value) {
        $value = esc_html($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : url
     * @package Toommorel
     */
    public static function toommorel_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : text
     * @package Toommorel
     */
    public static function toommorel_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : email
     * @package Toommorel
     */
    public static function toommorel_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : number
     * @package Toommorel
     */
    public static function toommorel_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }
}
// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('Toommorel_Customizer', 'Toommorel_Register'));
function inkthemes_registers() {
          wp_register_script( 'inkthemes_jquery_ui', '//code.jquery.com/ui/1.11.0/jquery-ui.js', array("jquery"), true  );
	wp_register_script( 'inkthemes_customizer_script', get_template_directory_uri() . '/functions/js/inkthemes_customizer.js', array("jquery","inkthemes_jquery_ui"), true  );
	wp_enqueue_script( 'inkthemes_customizer_script' );
	wp_localize_script( 'inkthemes_customizer_script', 'ink_advert', array(
            'pro' => __('View PRO version','toommorel-lite'),
            'url' => esc_url('http://www.inkthemes.com/wp-themes/toommorel-theme/'),
			'support_text' => __('Need Help!','toommorel-lite'),
			'support_url' => esc_url('http://www.inkthemes.com/lets-connect/'),
            )
            );
}
add_action( 'customize_controls_enqueue_scripts', 'inkthemes_registers');
