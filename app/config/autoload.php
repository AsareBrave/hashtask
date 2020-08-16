<?php
foreach (glob("../../app/Controllers/Hash/*.php") as $filename) {
	require_once($filename);
}

foreach (glob("../../app/Controllers/DotEnv/Exceptions/*.php") as $filename) {
	require_once($filename);
}

foreach (glob("../../app/Controllers/DotEnv/*.php") as $filename) {
	require_once($filename);
}

foreach (glob("../../model/DB/*.php") as $filename) {
	require_once($filename);
}

require_once __DIR__ . '/db/db_config.php';
