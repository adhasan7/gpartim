<?php
defined('BASEPATH') or exit('No direct script access allowed');

$server = $_SERVER['HTTP_HOST'];
if ($server == 'localhost:8888') {
	$username = 'root';
	$database = 'gpar';
	$password = 'root';
} else if ($server == 'localhost') {
	$username = 'root';
	$database = 'gpar';
	$password = '';
} else {
	$username = 'teamclov_clover';
	$database = 'teamclov_demo_9';
	$password = 'teamclov_clover';
}
$active_group = 'default';
$query_builder = true;
$db['default'] = array(
	'dsn' => '',
	'hostname' => 'localhost',
	'username' => $username,
	'password' => $password,
	'database' => $database,
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => false,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => false,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => false,
	'compress' => false,
	'stricton' => false,
	'failover' => array(),
	'save_queries' => true,
);
