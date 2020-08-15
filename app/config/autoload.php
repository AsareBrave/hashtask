<?php
foreach (glob("../app/Hash/*.php") as $filename) {
	require_once($filename);
}

foreach (glob("../model/DB/*.php") as $filename) {
	require_once($filename);
}

require_once __DIR__ . '/db/db_config.php';