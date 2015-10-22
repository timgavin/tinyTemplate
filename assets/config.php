<?php

// enter the name of your theme's enclosing folder
// default theme = flatly
define('THEME', 'flatly');



// define our site root
defined('ROOT') ? null : define('ROOT', dirname(__DIR__) . '/');



// include our functions
require_once ROOT . 'assets/functions.php';



// init our buffer
$tiny_buffer = getTinyBuffer();



// define our page 'sections'
$tiny['title']   = defineTinySection('title',   $tiny_buffer);
$tiny['css']     = defineTinySection('css',     $tiny_buffer);
$tiny['meta']    = defineTinySection('meta',    $tiny_buffer);
$tiny['content'] = defineTinySection('content', $tiny_buffer);
$tiny['scripts'] = defineTinySection('scripts', $tiny_buffer);
$tiny['jquery']  = defineTinySection('jquery',  $tiny_buffer);

// feel free to add your own custom sections..
// $tiny['header'] = defineTinySection('header',  $tiny_buffer);



// include the theme's template.php file
require_once ROOT . 'assets/themes/' . THEME . '/template.php';
