add_action('acf/init', 'nuoptima_acf_init');
function nuoptima_acf_init() {
	
	// check function exists
	if ( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'            => 'faq',
            'title'           => __('FAQ item'),
            'description'     => __('FAQ item with schema org'),
            'render_callback' => 'nuoptima_block_render_callback',
            'category'        => 'homepage',
            'icon'            => 'format-status'
        ));
    }

}
