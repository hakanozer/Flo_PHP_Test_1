<?php
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{

    /**
     * @var DummyService
     */
    private $objService = null;
    private $mapper = null;
    protected function setUp(): void
    {
        $this->objService = new DummyService();
        $this->mapper = new JsonMapper();
    }


    // Servis login test

    /**
     * @testWith ["kminchelle", "0lelplR", 15]
     *           ["atuny0", "9uQFF1Lh", 1]
     *           ["hbingley1", "CQutx25i8r", 2]
     */
    public function testDummyLogin( string $username, string $password, int $id ) {
        $response = $this->objService->login($username, $password);
        $this->assertNotNull($response);
        $statusCode = $response->getStatusCode();
        $this->assertEquals($statusCode, 200);

        $strBody = $response->getBody()->getContents();
        $json =  json_decode($strBody) ;

        /**
         * @var JWTUser
         */
        $jwtUser = $this->mapper->map($json, JWTUser::class);
        $this->assertNotNull($jwtUser);
        $this->assertInstanceOf(JWTUser::class, $jwtUser);
        $this->assertEquals($jwtUser->id, $id);
    }

    public function testData() : array {
        $arr = array();
        $arr[] = [ 'username' => 'user01', 'password' => 'pass01' ];
        $arr[] = [ 'username' => 'user02', 'password' => 'pass02' ];
        $arr[] = [ 'username' => 'user03', 'password' => 'pass03' ];
        $this->assertTrue(true);
        return $arr;
    }

    /**
     * @depends testData
     */
    public function testDataResult( array $arr ) {
        foreach ($arr as $item) {
            echo $item['username']."\n";
            echo $item['password']."\n";
        }
        $this->assertTrue(true);
    }

    public function dataCities() : array {
        return [
            [ 'istanbul', 1 ],
            [ 'Adana', 2 ],
            [ 'Antalya', 3 ]
        ];
    }

    /**
     * @dataProvider dataCities
     */
    public function testArr( string $name, int $count ) {
        echo $name." - ". $count;
        $this->assertTrue(true);
    }


    /**
     * @test
     */
    public function callFnc() {
        $this->assertTrue(true);
    }


    // servis mock test
    public function testServiceMock() {
        $dummService = $this->createMock(DummyService::class);
        $dummService->login('','');
        $this->assertTrue(true);
    }


    protected function tearDown(): void
    {
        $this->objService = null;
        $this->mapper  = null;
    }


}