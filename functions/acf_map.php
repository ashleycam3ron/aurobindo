<?php function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyAaO2yLwrl3V1kRnFsD75LRqL6bnognY30');
}
add_action('acf/init', 'my_acf_init');