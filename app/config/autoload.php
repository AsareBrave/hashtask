<?php
foreach (glob(Config::getDirName() . "/app/Controllers/Hash/*.php") as $filename) {
	require_once($filename);
}

foreach (glob(Config::getDirName() . "/app/Controllers/DotEnv/Exceptions/*.php") as $filename) {
	require_once($filename);
}

foreach (glob(Config::getDirName() . "/app/Controllers/DotEnv/*.php") as $filename) {
	require_once($filename);
}

foreach (glob(Config::getDirName() . "/model/DB/*.php") as $filename) {
	require_once($filename);
}

require_once Config::getDirName() . '/app/config/db/db_config.php';
require_once Config::getDirName() . '/app/config/messages.php';
