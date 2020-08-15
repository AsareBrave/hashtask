<?php
require_once './dbconn/db.class.php';
DB::$user = 'root';
DB::$password = 'xtreme1234';
DB::$dbName = 'sta';

DB::query("SELECT * FROM role");