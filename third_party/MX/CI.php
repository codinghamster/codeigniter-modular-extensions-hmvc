<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load MX core classes */
require_once 'Lang.php';
require_once 'Config.php';

class CI
{
	public static $APP;
	
	public function __construct() {
		self::$APP = CI_Base::get_instance();
		
		/* re-assign language and config for modules */
		if ( ! is_a(self::$APP->lang, 'MX_Lang')) self::$APP->lang = new MX_Lang;
		if ( ! is_a(self::$APP->config, 'MX_Config')) self::$APP->config = new MX_Config;
		
		self::$APP->load = new MX_Loader;
		self::$APP->load->_init();
	}
}

new CI;