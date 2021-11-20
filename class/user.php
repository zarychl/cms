<?php 
class user
{
    private $id;
    private $name;

    function _constuct(int $id, string $name)
    {
        $this->$id = $id;
        $this->$name = $name;
    }
}