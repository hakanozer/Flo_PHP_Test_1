<?php

class Product
{
    private int $pid;
    private string $title;

    /**
     * @param int $pid
     * @param string $title
     */
    public function __construct(int $pid, string $title)
    {
        $this->pid = $pid;
        $this->title = $title;
    }


    /**
     * @return int
     */
    public function getPid(): int
    {
        return $this->pid;
    }

    /**
     * @param int $pid
     */
    public function setPid(int $pid): void
    {
        $this->pid = $pid;
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

}