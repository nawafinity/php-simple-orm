
# About php-simple-orm

A light, simple, and (impractical 🌞) library that uses PHP Attributes feature.

> ⚠ Note: this library was made for learning purposes, it's not ready for the production environment.

![Visitors](https://visitor-badge.glitch.me/badge?page_id=nawafinity.php-simple-orm)
 
# Installation

## 1. Clone the library
```bash
git clone https://github.com/nawafinity/php-simple-orm.git
```

## 2. Run the example
  ```bash
  cd path/to/php-simple-orm/example
  composer install
  composer dump-autoload
  php -S localhost:8000 index.php
  ```

# Using

## 1. Create Entity

```php  
<?php  
namespace PhpSimpleOrmExample\Entities;  
  
use Nawafinity\PhpSimpleOrm\Attributes\Entity;  
use Nawafinity\PhpSimpleOrm\PhpSimpleOrm;  
  
#[Entity(name: 'employees')]  
class Employee extends PhpSimpleOrm {  
  
 #[Column(type: 'uuid', name: 'id')]
 public string $id;
 
 }  
```  

## 2. Create an entity's object
```php  
<?php  
namespace PhpSimpleOrmExample\Entities;  
  
$employee = new Employee();  
  
$result = $employee->select()  
 ->where('name', '=', 'Something') ->toSQL();  
```  

## 3. Expected output when you print the `$result`
```mysql
SELECT id, name FROM `employees` WHERE `name`='Something'
```  

## References
1. [PHP Attributes](https://www.php.net/manual/en/language.attributes.overview.php)
2. [PHP Reflection](https://www.php.net/manual/en/book.reflection.php)
3. [Laravel Package Generator](https://laravelpackageboilerplate.com/)
