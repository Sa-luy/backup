<?php

namespace HumanManagement2;

class EmployeeManager
{
    public array $static;
    public function __construct()
    {
        $this->static = [];
    }
    public function addHuman($static): void
    {
        $this->static[] = $static;
    }
    public function getHumans()
    {
        return $this->static;
    }
}