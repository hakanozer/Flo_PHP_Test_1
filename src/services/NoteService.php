<?php

class NoteService implements INote
{
    private $conn = null;
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
        echo "\n Note __construct Call\n";
    }

    public function saveNote(string $title, string $detail): int
    {
        echo "\nInsert Start\n";
        $sql = 'insert into note values(null, ?, ?, now())';
        $pre = $this->conn->prepare($sql);
        $status = $pre->execute([$title, $detail]);
        if ( $status ) {
            echo "\nInsert End\n";
            return $this->conn->lastInsertId();
        }
        return 0;
    }

    public function allNote(): array
    {
        $sql = 'select * from note';
        $pre = $this->conn->query($sql);
        $result = $pre->fetchAll();
        $arr = array();
        foreach ($result as $item) {
            $note = new Note($item['nid'], $item['title'], $item['detail'], $item['date']);
            $arr[] = $note;
        }
        return $arr;
    }
}