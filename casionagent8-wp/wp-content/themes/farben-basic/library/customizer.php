<?php
/**
 * Set up the default theme options
 *
 * @since 1.0.0
 */
function bavotasan_theme_options() {
	//delete_option( 'farben_basic_theme_options' );
	if ( ! $options = get_option( 'farben_basic_theme_options' ) ) {
		$options = array(
			'width' => '1170',
			'layout' => 'right',
			'primary' => 'col-md-9',
		);
		add_option( 'farben_basic_theme_options', $options );
	}

	return $options;
}

if ( class_exists( 'WP_Customize_Control' ) ) {
	class Bavotasan_Post_Layout_Control extends WP_Customize_Control {
		public $description;

	    public function render_content() {
			if ( empty( $this->choices ) )
				return;

			$name = '_customize-radio-' . $this->id;
			?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php
			foreach ( $this->choices as $value => $label ) :
				?>
				<label class="<?php echo esc_attr( $value ); ?>">
					<input type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?> />
					<?php echo '<div class="' . sanitize_title( $label ) . '"></div>'; ?>
				</label>
				<?php
			endforeach;
			if ( $this->description )
				echo '<p class="description">' . wp_kses_post( $this->description ) . '</p>';
	    }
	}
}

class Bavotasan_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'customize_register' ) );
		add_action( 'customize_controls_print_styles', array( $this, 'customize_controls_print_styles' ) );
	}

	public function customize_controls_print_styles() {
		wp_enqueue_style( 'bavotasan_image_widget_css', BAVOTASAN_THEME_URL . '/library/css/admin/image-widget.css' );
	}

	/**
	 * Adds theme options to the Customizer screen
	 *
	 * This function is attached to the 'customize_register' action hook.
	 *
	 * @param	class $wp_customize
	 *
	 * @since 1.0.0
	 */
	public function customize_register( $wp_customize ) {
		$bavotasan_theme_options = bavotasan_theme_options();

		// Layout section panel
		$wp_customize->add_section( 'bavotasan_layout', array(
			'title' => __( 'Layout', 'farben' ),
			'priority' => 35,
		) );

		$wp_customize->add_setting( 'farben_theme_options[width]', array(
			'default' => $bavotasan_theme_options['width'],
			'type' => 'option',
			'capability' => 'edit_theme_options',
            'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( 'bavotasan_width', array(
			'label' => __( 'Site Width', 'farben' ),
			'section' => 'bavotasan_layout',
			'settings' => 'farben_theme_options[width]',
			'priority' => 10,
			'type' => 'select',
			'choices' => array(
				'1170' => __( '1200px', 'farben' ),
				'992' => __( '992px', 'farben' ),
			),
		) );

		$choices =  array(
			'col-md-2' => '17%',
			'col-md-3' => '25%',
			'col-md-4' => '34%',
			'col-md-5' => '42%',
			'col-md-6' => '50%',
			'col-md-7' => '58%',
			'col-md-8' => '66%',
			'col-md-9' => '75%',
			'col-md-10' => '83%',
			'col-md-12' => '100%',
		);

		$wp_customize->add_setting( 'farben_theme_options[primary]', array(
			'default' => $bavotasan_theme_options['primary'],
			'type' => 'option',
			'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',
		) );

		$wp_customize->add_control( 'bavotasan_primary_column', array(
			'label' => __( 'Main Content Width', 'farben' ),
			'section' => 'bavotasan_layout',
			'settings' => 'farben_theme_options[primary]',
			'priority' => 15,
			'type' => 'select',
			'choices' => $choices,
		) );

		$wp_customize->add_setting( 'farben_theme_options[layout]', array(
			'default' => $bavotasan_theme_options['layout'],
			'type' => 'option',
			'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',
		) );

		$layout_choices = array(
			'left' => __( 'Left', 'farben' ),
			'right' => __( 'Right', 'farben' ),
		);

		$wp_customize->add_control( new Bavotasan_Post_Layout_Control( $wp_customize, 'layout', array(
			'label' => __( 'Sidebar Layout', 'farben' ),
			'section' => 'bavotasan_layout',
			'settings' => 'farben_theme_options[layout]',
			'priority' => 25,
			'choices' => $layout_choices,
		) ) );
	}
}
$bavotasan_customizer = new Bavotasan_Customizer;