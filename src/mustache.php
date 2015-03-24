<?php

namespace alsvanzelf\fem;

class mustache {

protected static $cache_directory    = 'cache/mustache/';
protected static $template_directory = 'application/templates/';
protected static $logger = null;

private static $engine = null;

protected static function init() {
	$loader_directory = \alsvanzelf\fem\ROOT_DIR.static::$template_directory;
	$loader_options   = array(
		'extension' => '.html'
	);
	$loader = new \Mustache_Loader_FilesystemLoader($loader_directory, $loader_options);
	
	$pragmas = array(
		\Mustache_Engine::PRAGMA_FILTERS,
	);
	$options = array(
		'cache'            => \alsvanzelf\fem\ROOT_DIR.static::$cache_directory,
		'loader'           => $loader,
		'partials_loader'  => $loader,
		'entity_flags'     => ENT_QUOTES|ENT_SUBSTITUTE|ENT_DISALLOWED,
		'charset'          => 'UTF-8',
		'logger'           => static::$logger,
		'strict_callables' => true,
		'pragmas'          => $pragmas,
	);
	self::$engine = new \Mustache_Engine($options);
	
	foreach (self::get_helpers() as $name => $callable) {
		self::$engine->addHelper($name, function($content) use($callable) {
			return $callable($content);
		});
	}
}

protected static function get_helpers() {
	return array(
		'resources_timestamp_css' => array('\alsvanzelf\fem\resources', 'timestamp_css'),
		'resources_timestamp_js'  => array('\alsvanzelf\fem\resources', 'timestamp_js'),
	);
}

public static function render($template, $data=array()) {
	if (is_null(self::$engine)) {
		static::init();
	}
	
	return self::$engine->render($template, $data);
}

}
