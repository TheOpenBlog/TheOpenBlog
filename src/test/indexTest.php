<?php
include '../src/main/index.php';
#Testing class for index.php
class myClassTest extends PHPUnit_Framework_TestCase{
    public function testYolo(){
        $args =2;
        $expectedResult = "Bolo";
        $result = myfun($args);
        $this->assertEquals($expectedResult, $result);
    }
}
 ?>
