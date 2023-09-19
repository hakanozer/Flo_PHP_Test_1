<?php
use PHPUnit\Framework\TestCase;

class ActionTest extends TestCase
{

    /**
     * @beforeClass
     */
    public static function beforeClass() {
        print "beforeClass Call";
    }

    /**
     * @before
     */
    public function before() {
        print "before call";
    }

    /**
     * @author ali bilmem
     */
    public function testSum() {
        $obj = new Action();
        $total = $obj->sum(50, 80);
        $this->assertEquals(125, $total);
    }

    public function  testCall_1() {
        $this->assertEquals(true, true);
    }

    // userLogin
    public function testUserLogin() {
        $obj = new Action();
        $arr = $obj->userLogin('kminchelle', '0lelplR');
        //$this->assertArrayHasKey('token', $arr);
        $this->assertObjectHasProperty('token', $arr, 'Username or password Fail');
    }

    // arraySubSet
    public function testArraySubSet() {
        $obj = new Action();
        $arr = $obj->dataArr();
        $this->assertEquals(['user' => ['id' => 100, 'token' => 'token123']], $arr);
    }


    // array contains
    public function testArrayContains() {
        $obj = new Action();
        $arr = $obj->stringArr();
        $this->assertContains('Edirne', $arr);
        $this->assertStringContainsString('mir', $obj->name);
        $this->assertStringContainsStringIgnoringCase('emir@MAil.com', $obj->email);
    }

    // array item type test
    public function testArrayItemType() {
        $obj = new Action();
        $arr = $obj->stringArr();
        $this->assertContainsOnly('string', $arr );
    }

    public function testInstanceType() {
        $obj = new Action();
        $arr = $obj->resultArr();
        $this->assertContainsOnlyInstancesOf(User::class, $arr);
        $this->assertCount(3, $arr);
        $this->assertEquals( 3, count($arr));
    }


    // file and directory control
    public function testFileDirectoryControl() {
        $this->assertDirectoryExists('../logs');
        $this->assertDirectoryIsReadable('../logs');
        $this->assertDirectoryIsWritable('../logs');

        // file control
        $this->assertFileExists('../logs/sample.txt');
        $this->assertFileIsWritable('../logs/sample.txt');
    }

    public function testThanControl() {
        $number = 18;
        $this->assertGreaterThan(17, $number);
        $this->assertGreaterThanOrEqual(18, $number);
        $this->assertEquals( true, $number >= 18 && $number < 90 );

        //$this->assertLessThan(17, $number);
        $this->assertLessThanOrEqual(18, $number);
    }

    public function testRestCall() {
        $obj = new Action();

        try {
            $obj->restCall();
            $this->assertTrue(true);
        }catch (DivisionByZeroError $ex) {
            $this->assertIsCallable(null, "RestCall Function  Fail ". $ex->getMessage());
        }

        //$this->expectExceptionObject(new DivisionByZeroError());
        //$obj->restCall();
    }

    public function testCall_2() {
        $num = 1;
        $this->assertEquals(1, $num);
    }


    /**
     * @after
     */
    public function after() {
        print "after call";
    }

    /**
     * @afterClass
     */
    public static function afterClass() {
        print "afterClass call";
    }
}