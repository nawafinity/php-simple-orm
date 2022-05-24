<?php

namespace PhpSimpleOrmExample\Entities;

use Nawafinity\PhpSimpleOrm\Attributes\Column;
use Nawafinity\PhpSimpleOrm\Attributes\Entity;
use Nawafinity\PhpSimpleOrm\PhpSimpleOrm;

#[Entity('students')]
class Student extends PhpSimpleOrm
{
    #[Column(type: 'uuid', name: 'id')]
    public string $id;

    #[Column(type: 'string', name: 'name')]
    public string $name;
}