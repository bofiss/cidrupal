<?php
define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
// Bootstrap Drupal.
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

class HelloWorldTest extends PHPUnit_Framework_TestCase {


 public function testHelloWorld_Help(){

   $this->assertEquals(check_plain("test"), "test");
   $this->assertEquals("<p>Hello world help.</p>", helloworld_help("admin/help#helloworld") );
   print_r(_dblog_get_message_types());
 }

}
