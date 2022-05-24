<?php

namespace Nawafinity\PhpSimpleOrm\Attributes;

#[\Attribute]
class Column
{
    public string $name;
    public string $type;

    public function __construct(string $type, ?string $name)
    {
        $this->name = $name;
        $this->type = $type;
    }
}