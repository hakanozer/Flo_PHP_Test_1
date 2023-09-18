<?php
use \PHPUnit\Framework\TestCase;

class ActionTest extends TestCase
{

    public $Obj = null;

    /**
     * @beforeClass
     */
    public static function beforeClassFnc() : void {
        print("beforeClassFnc class");
    }


    /**
     * @before
     */
    public function before() {
        print("before call");
    }

    public function testSum() {
        $total = Action::sum(30,50);
        $this->assertEquals(79, $total);
    }

    public function testCall() {
        $obj = new Action("Mehmet Bil");
        $name = $obj->call();
        $this->assertEquals("Mehmet", $name);
    }

    public function testCall_1() {
        $this->assertEquals(10, 11);
    }

    /**
     * @after
     */
    public function after() {
        print("after");
    }

    /**
     * @afterClass
     */
    public static function tearDownAfterClassFnc(): void
    {
        print("tearDownAfterClassFnc call");
    }


}