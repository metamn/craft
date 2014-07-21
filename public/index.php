<?php

// Path to your craft/ folder
$craftPath = '../craft';

// Templates outside of /craft
// - http://craftcms.stackexchange.com/questions/241/craft-css-frameworks-bower-grunt-setup-suggestions
define('CRAFT_TEMPLATES_PATH', realpath(dirname(__FILE__) . "/theme").'/');



// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
