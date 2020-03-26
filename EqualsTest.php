<?php
use PHPUnit\Framework\TestCase;
require 'MyClass.php';

class EqualsTest extends TestCase
{

    public function testSuccess3()
    {
    	$obj = new MyClass();
    	$res1 = $obj->checkRemainder(3,3);
    	$res2 = $obj->checkRemainder(6,3);
    	$res3 = $obj->checkRemainder(9,3);
        $this->assertEquals(0, $res1);
        $this->assertEquals(0, $res1);
        $this->assertEquals(0, $res1);
    }

    public function testSuccess5()
    {
    	$obj = new MyClass();
    	$res1 = $obj->checkRemainder(5,5);
    	$res2 = $obj->checkRemainder(10,5);
    	$res3 = $obj->checkRemainder(50,5);
        $this->assertEquals(0, $res1);
        $this->assertEquals(0, $res1);
        $this->assertEquals(0, $res1);
    }

    public function testSuccess35()
    {
    	$obj = new MyClass();
    	$res1 = $obj->checkRemainder(15,3);
    	$res2 = $obj->checkRemainder(15,5);
    	$res3 = $obj->checkRemainder35($res1,$res2);
        $this->assertEquals(0, $res3);
    }
}
?>
