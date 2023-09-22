<?php

class Note
{
    private int $nid;
    private string $title;
    private string $detail;
    private string $date;

    /**
     * @param int $nid
     * @param string $title
     * @param string $detail
     * @param string $date
     */
    public function __construct(int $nid, string $title, string $detail, string $date)
    {
        $this->nid = $nid;
        $this->title = $title;
        $this->detail = $detail;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getNid(): int
    {
        return $this->nid;
    }

    /**
     * @param int $nid
     */
    public function setNid(int $nid): void
    {
        $this->nid = $nid;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDetail(): string
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     */
    public function setDetail(string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }


}