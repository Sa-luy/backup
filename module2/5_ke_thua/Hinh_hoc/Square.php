<?php
class Square  extends Rectangle
{
    function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
}
