<?php


class FirstTest extends PHPUnit_Framework_TestCase{

  public function testLoginChk(){
    print_r(user_authenticate('admin', 'admin'));
    $this->assertEquals(1, user_authenticate('admin', 'admin'));
    $this->assertEquals(check_plain("test"), "test");
    $this->assertEquals("<p>Hello world help.</p>", helloworld_help("admin/help#helloworld") );
    print_r(_dblog_get_message_types());

  }

}
