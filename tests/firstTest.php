<?php
define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
// Bootstrap Drupal.
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

class FirstTest extends PHPUnit_Framework_TestCase{

  public function testLoginChk(){
    print_r(user_authenticate('admin', 'admin'));
    $this->assertEquals(1, user_authenticate('admin', 'admin'));
  }

}
