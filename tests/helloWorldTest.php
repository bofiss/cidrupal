
<?php


class HelloWorldTest extends PHPUnit_Framework_TestCase {


 public function testHelloWorld(){

   $this->assertEquals(check_plain("tests"), "tests");
   $this->assertEquals("<p>Hello world help.</p>", helloworld_help("admin/help#helloworld") );
   print_r(_dblog_get_message_types());
 }

}
