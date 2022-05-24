<?php

namespace Nawafinity\PhpSimpleOrm\Attributes;

#[\Attribute]
class Entity
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}