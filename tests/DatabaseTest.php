<?php
use \PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testDbConnection() {
        $db = new Database();
        $conn = $db->getConnection();
        $this->assertNotNull($conn);
        $this->assertInstanceOf( PDO::class ,$conn);
        $status = $conn->beginTransaction();
        $this->assertTrue($status);
    }

    public function testCreateNote() {
        $noteService = new NoteService();
        $random = random_int(1, 10000);
        $id = $noteService->saveNote('Toplantı-'.$random, 'Detay Toplantı');
        $this->assertGreaterThan(0, $id);
    }

    public function testAllNote() {
        $noteService = new NoteService();
        $arr = $noteService->allNote();
        $this->assertIsArray($arr);
        $this->assertNotCount(0, $arr);
        $this->assertInstanceOf(Note::class, $arr[0]);
        $obj = $arr[0];
        $title = $obj->getTitle();
        $this->assertEquals($title, 'Toplantı');
    }

    public function  testCreateNoteMock() {
        $mockNoteService = $this->createMock(NoteService::class);
        $this->assertInstanceOf(NoteService::class, $mockNoteService);
        $numberID = $mockNoteService->saveNote("Save Title", "Detail Title");
        print $numberID."\n";
        $this->assertEquals(true, true);

        $inoteMock = $this->createMock(INote::class);
        $iNumberID = $inoteMock->saveNote('iTitle', 'iDetail');
        print $iNumberID;

    }


}