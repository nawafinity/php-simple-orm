# About Library

I made it for learning.

## Installation

Just clone it and you are ready to go.


## How to create an entity

### 1. Create Entity

```php
<?php
namespace PhpSimpleOrmExample\Entities;

use Nawafinity\PhpSimpleOrm\Attributes\Entity;
use Nawafinity\PhpSimpleOrm\PhpSimpleOrm;

#[Entity(name: 'employs')]
class Employee extends PhpSimpleOrm {

    #[Column(type: 'uuid', name: 'id')]
    public string $id;
}
```

### 2. Create an object
```php
<?php
namespace PhpSimpleOrmExample\Entities;

$employee = new Employee();

$employee->select()
    ->where('name', '=', 'Something')
    ->toSQL();
```

