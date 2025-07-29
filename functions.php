<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

// functions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well

// Main switch to get frontend assets from a Vite dev server OR from production built folder
define('IS_VITE_DEVELOPMENT', true);

// Load Vite asset handling
include "inc/inc.vite.php";

// ✅ Load theme setup for menus and features
require_once get_template_directory() . '/inc/setup.php';
