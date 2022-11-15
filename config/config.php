<?php 
if(session_id() == '') {
    session_start();
}
date_default_timezone_set('Europe/London');
define('hostname_portfolio','localhost');
define('database_portfolio' ,'hhh');
define('username_portfolio','root');
define('password_portfolio' ,''); 
define('product_items_limit',10);
define('site_name' ,'In2Download.com');
define('site_root','/aa'); // root directory of the script

define('support_email','');
define('mail_from','');
define('paypal_email','');
define('sandbox',false);
define('email_host','');
define('emailsigb','');
define('email_pass','');
define('email_address','Support@domain');
define('skype','MYSKYPE');
define('https',false);
define('errors',false);
define('curency','US $');
define('moneycode','USD');
define('user_agent','user_agent');
if(errors)
{
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}
else { 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
}

 define('logo','http://demo.in2download.com/images/logo.png');
 define('slogan','In2Download');
 define('disable',false);
 
 define('ministra','ministra');
 define('ministra_user','ministra_user');
 define('ministra_pass','ministra_pass');
 define('ministra_dir','ministra_dir');
 define('default_tariff','default_tariff');
 
 
?>