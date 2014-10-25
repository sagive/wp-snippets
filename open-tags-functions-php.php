<?php
/*** DEFINE GLOBAL VARS ***/
@define('THEME_NAME', 'YOUR_THEME_NAME');
@define('THEME_PREF', THEME_NAME.'_');
@define('get_template_directory()', THEME_PATH);
@define('BASE_URL', get_template_directory_uri());
@define('REL_URL', dirname( __FILE__ ));
@define('IMG_URL', get_template_directory_uri().'/images');


?>