<?php
use './src/main/index.php';

class myClassTest extends PHPUnit_Framework_TestCase{
    public function yoloTest(){
        $args =2;
        $expectedResult = "Bolo";
        $result = myfun($args);
        $this->assertEquals($expectedResult, $result);
    }
}
 ?>
