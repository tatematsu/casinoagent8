<?php
class Bavotasan_Documentation {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Add a 'Documentation' menu item to the Appearance panel
	 *
	 * This function is attached to the 'admin_menu' action hook.
	 *
	 * @since 1.0.0
	 */
	public function admin_menu() {
		add_theme_page( sprintf( __( 'Welcome to %s %s', 'farben' ), BAVOTASAN_THEME_NAME, BAVOTASAN_THEME_VERSION ), sprintf( __( 'About %s', 'farben' ), BAVOTASAN_THEME_NAME ), 'edit_theme_options', 'bavotasan_documentation', array( $this, 'bavotasan_documentation' ) );
	}

	public function bavotasan_documentation() {
		?>
		<style>
		.featured-image {
			margin: 20px auto !important;
		}

		.about-wrap .dfw h3 {
			text-align: left;
		}

		.about-wrap .dfw h3,
		.about-wrap ul,
		.featured-image {
			max-width: 68%;
		}

		.about-wrap .dfw h3,
		.about-wrap ul {
			margin-left: auto;
			margin-right: auto;
		}

		.about-wrap ul {
			padding-left: 60px;
			list-style: disc;
			margin-bottom: 20px;
		}

		.about-wrap .theme-badge {
			position: absolute;
			top: 0;
			right: 0;
		}

		@media only screen and (max-width: 500px) {
			.featured-image,
			.about-wrap .dfw h3,
			.about-wrap ul {
				max-width: 90%;
			}

			.about-wrap .theme-badge {
				display: none;
			}
		}
		</style>
		<div class="wrap about-wrap" id="custom-background">
			<h1><?php echo get_admin_page_title(); ?></h1>

			<div class="about-text">
				<?php printf( __( 'Read through the following documentation to learn more about <em>%s</em> and how to use the available theme options.', 'farben' ), BAVOTASAN_THEME_NAME ); ?>
			</div>
			<div class="theme-badge">
				<img src="<?php echo BAVOTASAN_THEME_URL; ?>/library/images/screenshot_sml.jpg" />
			</div>

			<h2 class="nav-tab-wrapper">
				<a href="<?php echo admin_url( 'themes.php?page=bavotasan_documentation' ); ?>" class="nav-tab nav-tab-active"><?php _e( 'Documentation', 'farben' ); ?></a>
				<a href="<?php echo admin_url( 'themes.php?page=bavotasan_preview_pro' ); ?>" class="nav-tab"><?php _e( 'Upgrade', 'farben' ); ?></a>
			</h2>

			<div class="changelog headline-feature dfw">
				<h2><?php _e( 'The Customizer', 'farben' ); ?></h2>

				<div class="featured-image dfw-container">
					<img src="<?php echo BAVOTASAN_THEME_URL; ?>/library/images/customizer.jpg" />
				</div>

				<p><?php printf( __( 'All theme options for <em>%s</em> are controlled under %sAppearance &rarr; Customize%s. From there, you can modify layout, custom menus, and more.', 'farben' ), BAVOTASAN_THEME_NAME, '<a href="' . admin_url( 'customize.php' ) . '">', '</a>' ); ?></p>

				<h3><?php _e( 'Site &amp; Main Content Width', 'farben' ); ?></h3>

				<p><?php _e( 'There are two width options for your site: 1200px &amp; 992px. You can select the width of your main content, based on a 12 column grid. Resizing your main content will also resize your sidebar.', 'farben' ); ?></p>

				<h3><?php _e( 'Sidebar Layout', 'farben' ); ?></h3>

				<p><?php _e( 'With the sidebar layout option, you can decide whether to display your sidebar on the left or right of your main content.', 'farben' ); ?></p>
			</div>
			<hr />

			<div class="changelog headline-feature dfw">
				<h2><?php _e( 'Jumbo Headline', 'farben' ); ?></h2>

				<div class="featured-image dfw-container">
					<img src="<?php echo BAVOTASAN_THEME_URL; ?>/library/images/jumbo-headline.jpg" />
				</div>

				<p><?php printf( __( 'The Jumbo Headline is a widgetized area on the home page designed for a Text widget. Go to %sAppearance &rarr; Widgets%s to add the widget and customize the text.', 'farben' ), '<a href="' . admin_url( 'widgets.php' ) . '">', '</a>' ); ?></p>
			</div>
			<hr />

			<div class="changelog headline-feature dfw">
				<h2><?php _e( 'Home Page Grid', 'farben' ); ?></h2>

				<div class="featured-image dfw-container">
					<img src="<?php echo BAVOTASAN_THEME_URL; ?>/library/images/home-sticky-grid.jpg" />
				</div>

				<p><?php printf( __( 'On the home page there is a section of images displayed in a grid layout. You can add a post to this section by making it a sticky post. Learn more about sticky posts and how to change the %sPost Visibility%s.', 'farben' ), '<a href="http://en.support.wordpress.com/posts/post-visibility/">', '</a>' ); ?></p>
			</div>
			<hr />

			<div class="changelog headline-feature dfw">
				<h2><?php _e( 'Custom Menus', 'farben' ); ?></h2>

				<p><?php printf( __( '<em>%s</em> includes one Custom Menu locations: the Primary top menu.', 'farben' ), BAVOTASAN_THEME_NAME ); ?></p>

				<p><?php printf( __( 'To add a navigation menu to the header, go to %sAppearance &rarr; Menus%s. By default, a list of categories will appear in this location if no custom menu is set.', 'farben' ), '<a href="' . admin_url( 'nav-menus.php' ) . '">', '</a>' ); ?></p>

				<p><?php _e( 'Clicking on a top-level link in the primary navigation will open up one dropdown list of sub-menu links.', 'farben' ); ?></p>

			</div>
			<hr />

			<div class="changelog headline-feature dfw">
				<h2><?php _e( 'Jetpack', 'farben' ); ?></h2>

				<div class="featured-image dfw-container">
					<img src="<?php echo BAVOTASAN_THEME_URL; ?>/library/images/jetpack.jpg" />
				</div>

				<h3><?php _e( 'Infinite Scroll', 'farben' ); ?></h3>

				<p><?php printf( __( '%sJetpack&rsquo;s Infinite Scroll%s allows your visitors to view all your posts without having to click through to the next page. As they scroll, new posts will be added. To activate go to %sJetpack &rarr; Settings%s. ', 'farben' ), '<a href="//jetpack.me/support/infinite-scroll/">', '</a>', '<a href="' . admin_url( 'admin.php?page=jetpack_modules' ) . '">', '</a>' ); ?></p>

				<h3><?php _e( 'Tiled Galleries', 'farben' ); ?></h3>

				<p><?php printf( __( '%sJetpack&rsquo;s Tiled Galleries%s will display your images in a beautiful mosaic layout. Go to %sJetpack &rarr; Settings%s to turn it on. ', 'farben' ), '<a href="//jetpack.me/support/tiled-galleries/">', '</a>', '<a href="' . admin_url( 'admin.php?page=jetpack_modules' ) . '">', '</a>' ); ?></p>

				<h3><?php _e( 'Carousel', 'farben' ); ?></h3>

				<p><?php printf( __( 'With %sJetpack&rsquo;s Carousel%s, clicking on one of your gallery images will open up a featured lightbox slideshow. Turn it on by going to %sJetpack &rarr; Settings%s. ', 'farben' ), '<a href="//jetpack.me/support/carousel/">', '</a>', '<a href="' . admin_url( 'admin.php?page=jetpack_modules' ) . '">', '</a>' ); ?></p>
			</div>
			<hr />

			<div class="changelog headline-feature dfw">
				<h2><?php _e( 'Pull Quotes', 'farben' ); ?></h2>

				<div class="featured-image dfw-container">
					<img src="<?php echo BAVOTASAN_THEME_URL; ?>/library/images/pull-quotes.jpg" />
				</div>

				<p><?php _e( 'You can easily include a pull quote within your text by using the following code within the Text/HTML editor:', 'farben' ); ?></p>

				<p><code><?php _e( '&lt;blockquote class="pullquote"&gt;This is a pull quote that will appear within your text.&lt;/blockquote&gt;', 'farben' ); ?></code></p>
				<p><?php _e( 'You can also align it to the right with this code:', 'farben' ); ?></p>

				<p><code><?php _e( '&lt;blockquote class="pullquote alignright"&gt;This is a pull quote that will appear within your text.&lt;/blockquote&gt;', 'farben' ); ?></code></p>
			</div>
			<hr />

			<p><?php printf( __( 'For more information, check out the %sDocumentation &amp; FAQs%s section on my site.', 'farben' ), '<a href="//themes.bavotasan.com/documentation/" target="_blank">', '</a>' ); ?></p>
		</div>
		<?php
	}
}
$bavotasan_documentation = new Bavotasan_Documentation;