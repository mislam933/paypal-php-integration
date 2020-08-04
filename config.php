<?php 
/* 
 * PayPal and database configuration 
 */ 
  
// PayPal configuration kasten@kastenspethmann.com
define('PAYPAL_ID', 'kasten@kastenspethmann.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://www.example.com/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://www.example.com/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://www.example.com/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'root'); 
define('DB_NAME', 'paypal_integration_php'); 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");