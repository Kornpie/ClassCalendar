<?php
include "Calendar.php";

use PHPUnit\Framework\TestCase;

class test_calendar extends TestCase{
    private $calender;

    public function setUp():void{
        $this->calender= new Calender();
    }
    public function test1(){
        $this->assertEquals("Wednesday",$this->calender->showDay(02,03));
    }
    public function test2(){
        $this->assertEquals("Friday",$this->calender->showDay(01,15));
    }
    public function test3(){
        $this->assertEquals("Tuesday",$this->calender->showDay(04,20));
    }
}
?>