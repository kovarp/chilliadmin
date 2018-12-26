<?php declare(strict_types = 1);

define('CHILLIADMIN_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CHILLIADMIN_PLUGIN_URL', plugin_dir_url(__FILE__));

new kovarp\ChilliAdmin\Enqueue();
new kovarp\ChilliAdmin\Login();
