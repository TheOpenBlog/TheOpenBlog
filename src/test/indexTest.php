<?php
$path =__DIR__.'/../main/index.php';
include_once($path);
#Testing class for index.php
class myClassTest extends PHPUnit_Framework_TestCase{
    /**
    * @param integer $var1 Value
    * @param integer $var2 What we expect our result to be
    * @dataProvider yoloMagic The Magic Data Provider
    */
    public function testYolo($var1,$var2){
        $a=new myClass();
        $args =$var1;
        $expectedResult =$var2;
        $result = $a->myfun($args);
        $this->assertEquals($expectedResult,$result);
    }

    public function yoloMagic()
{
    return array(
        array('1', 'Bolo'),
        array('2', 'Bolo'),
        array('3', 'Bolo'),
        array('4', 'Yolo')
    );
}
}
 ?>
