
<?php

/**
 *
 *
 * @author Brendan Howard
 * @category ANM293 - Advanced PHP
 *
 * Final Exam
 *
 */

  @ini_set('default_charset','');
  @ini_set('default_mimetype','');
  date_default_timezone_set('America/Detroit');
  @ini_set('display_errors','On');
  @ini_set('log_errors','On');
  @error_reporting(E_ALL & ~E_STRICT);

   if( PATH_SEPARATOR  == ';' )
    define('SLASH','\\');
  else
    define('SLASH','/');

  define('APP_PATH', realpath(dirname(__FILE__)));

  set_include_path('.'.PATH_SEPARATOR.implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . SLASH . 'library'.SLASH . 'Zend' . SLASH . '1.11.3'.SLASH.'Zend')
  )));


	require_once('/Config/Ini.php');
  require_once('/Controller/Action.php');
  require_once('/Controller/Front.php');
  require_once('/Controller/Router/Route/Regex.php');
  require_once('/Controller/Dispatcher/Standard.php');