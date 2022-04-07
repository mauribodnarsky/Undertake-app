<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'root', 'ROOT', 'undertake');
		$db->query("SET NAMES 'utf8'");
		$db->query("SET lc_time_names = 'es_AR';");
		return $db;
	}
}

