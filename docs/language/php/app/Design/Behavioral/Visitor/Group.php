<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Visitor;


class Group implements Role
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() : string {
        return sprintf("Group %s",$this->name);
    }

    public function accept(RoleVisitorInterface $visitor)
    {
        $visitor->visitGroup($this);
    }
}