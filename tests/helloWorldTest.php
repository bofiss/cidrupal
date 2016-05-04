<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase {


 public function testHelloWorld_Help(){

   $this->assertEquals(check_plain("test"), "test");
   $this->assertEquals("<p>Hello world help.</p>", helloworld_help("admin/help#helloworld") );
   print_r(_dblog_get_message_types());
 }

}
