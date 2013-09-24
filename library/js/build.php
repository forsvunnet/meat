<?php

function meat_build_js() {
	$path = dirname(__FILE__);
	$files = array(
	  'libs/modernizr.custom.min.js',
	  'meat.js',
	  'scripts.js',
	  'custom.js'
	);

	$cache = 'cache.js';
	$cache_path = $path . '/' . $cache;
	if (file_exists($cache_path)) {
		$cache_time = filemtime($cache_path);
		$update = FALSE;
		foreach ($files as $file) {
			$file_path = $path . '/' . $file;
			// Check if the file exists
			// and if the timestamp of the file has changed since the timestamp of the cached file
			if (file_exists($file_path) && filemtime($file_path) > $cache_time) {
				$update = TRUE;
				break;
			}
		}
	} else {
		$update = TRUE;
	}

	$html = FALSE;
	if ($update) {
		$html = '<script type="text/javascript">%s</script>'; $script = '';
		foreach ($files as $file) {
			$file_path = $path . '/' . $file;
			$script .= file_get_contents($file_path) . "\n";
		}
		$html = sprintf($html, $script);
	}

	return $html;
}