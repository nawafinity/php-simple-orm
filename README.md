
# About Library

A simple PHP ORM library that used PHP 8 Attributes.

> Hey, this library made for learning porpoise, not ready for production use.

## Installation

### 1. Clone the library
```bash
git clone https://github.com/nawafinity/php-simple-orm.git
```

### 2. Run the example
  ```bash
  cd path/to/php-simple-orm/example
  composer install
  composer dump-autoload
  php -S localhost:8000 index.php
  ```

## How to create an entity

### 1. Create Entity

```php  
<?php  
namespace PhpSimpleOrmExample\Entities;  
  
use Nawafinity\PhpSimpleOrm\Attributes\Entity;  
use Nawafinity\PhpSimpleOrm\PhpSimpleOrm;  
  
#[Entity(name: 'employs')]  
class Employee extends PhpSimpleOrm {  
  
 #[Column(type: 'uuid', name: 'id')] public string $id;
 
 }  
```  

### 2. Create an object
```php  
<?php  
namespace PhpSimpleOrmExample\Entities;  
  
$employee = new Employee();  
  
$employee->select()  
 ->where('name', '=', 'Something') ->toSQL();  
```  

### 3. Expected output when you print the result
```  
"SELECT id, name FROM `students` WHERE `name`='Something'"  
```  

## References
[PHP Attributes](https://www.php.net/manual/en/language.attributes.overview.php)
[PHP Reflection](https://www.php.net/manual/en/book.reflection.php)
[Laravel Package Generator](https://laravelpackageboilerplate.com/)