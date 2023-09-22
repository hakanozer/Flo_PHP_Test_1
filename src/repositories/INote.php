<?php

interface INote
{

    public function saveNote(string $title, string $detail) : int;
    public function allNote() : array;

}