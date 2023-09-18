<?php
use PHPUnit\Framework\TestCase;

class DataResultTest extends TestCase
{

    public function testArrJson() {
        $obj = new ResultData();
        $arr = $obj->result();
        $json = json_decode($arr, true);
        //var_dump($json);
        $this->assertArrayHasKey('token', $json);
        //$this->assertObjectHasProperty('token', $json);
    }

    public function testAttrClass() {
        $obj = new ResultData();
        $data = $obj->stringData();
        $this->assertClassHasAttribute($data, Action::class);
    }

    public function testArr() {
        $obj = new ResultData();
        $arr = $obj->arrControl();
        var_dump($arr);
        //$this->assertIsArray($arr);
        $this->assertEquals($arr, ['user' => ['id' => 100, 'name' => 'Ali Bilmem' ]] );
    }

    public function testContains() {
        $obj = new ResultData();
        $name = $obj->stringData();
        $arr = $obj->dataArr();
        $this->assertContains('Ankara', $arr);
        $this->assertStringContainsStringIgnoringCase('bilmem', $name);
        $this->assertContainsOnly('string', $arr, null, "Dizi String Türünde Değil!");
    }


    public function testInstanceOf() {
        $obj = new ResultData();
        $arr = $obj->userArr();
        $this->assertContainsOnlyInstancesOf(User::class, $arr, 'Tüm objeler User Türünde Değil!');
    }

    public function testCount() {
        $obj = new ResultData();
        $arr = $obj->userArr();
        $this->assertCount(2, $arr);

        $name = $obj->stringData();
        $this->assertEmpty($name);
    }

    public function testFilePathControl() {

        // /Applications/XAMPP/xamppfiles/htdocs/PHP_Test/images
        $this->assertDirectoryExists('../images');
        $this->assertDirectoryIsReadable("../images");
        $this->assertDirectoryIsWritable("../images");

        // File control
        $this->assertFileExists("../images/sample.jpg");
        $this->assertFileIsReadable("../images/sample.txt");
        $this->assertFileIsWritable("../images/sample.txt");

    }

    public function testEquals() {
        $obj = new ResultData();
        $email = $obj->emailAddress();
        //$this->assertEquals("Ali@mail.com", $email);
        $this->assertEqualsIgnoringCase("Ali@mail.com", $email);
        $this->assertTrue($email === 'ali@mail.com', 'assertTrue not valid');
    }

    public function testThan() {
        $this->assertGreaterThan(11, 13);
        $this->assertGreaterThanOrEqual(18,18);
        $this->assertLessThan(13,12);
        $this->assertLessThanOrEqual(18,18);
    }

}