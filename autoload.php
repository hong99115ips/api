<?php

/*
 * Session
 *
**/
session_start();

/*
 * App
 *
**/
foreach(scandir(__DIR__.'/app') as $e) 
	if(!in_array($e, ['.', '..'])) require __DIR__.'/app/'.$e;

/*
 * Core
 *
**/
foreach(scandir(__DIR__.'/core') as $e) 
	if(!in_array($e, ['.', '..'])) require __DIR__.'/core/'.$e;

/*
 * Display Error
 *
**/
if($general['debug']) 
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);

/*
 * HTTPS
 *
**/
if($general['https']) 
	if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") { header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); exit; }

/*
 * Content Type
 *
**/
switch($general['format']) {
	
	case 'json':
		header('Content-type: application/json');
		break;
	
	case 'xml':
		header('Content-type: application/xml');
		break;
	
}

/*
 * Custom
 *
**/
