<?php


class FirstTest extends PHPUnit_Framework_TestCase{

  public function testLoginChk(){
    print_r(user_authenticate('admin', 'admin'));
    $this->assertEquals(0, user_authenticate('admin', 'admin'));
  }

}
