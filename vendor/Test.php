<?php


class Test
{
private $name;

public function __construct($name)
{
    $this->name =$name;
}

    public function __toString()
{
    // TODO: Implement __toString() method.
    return $this->name;
}
}