<?php

namespace Nawafinity\PhpSimpleOrm;

class PhpSimpleOrm
{
    protected array $query;
    protected string $tableName;
    protected array $fields;

    public function __construct()
    {
        $reflection = new \ReflectionClass($this);

        // Get table name.
        $entityAttribute = $reflection->getAttributes('Nawafinity\PhpSimpleOrm\Attributes\Entity');

        if (count($entityAttribute) == 0) {
            throw new \Exception("This is not entity");
        }

        $this->tableName = $entityAttribute[0]->newInstance()->name;

        $reflectionObject = new \ReflectionObject($this);

        $props = $reflectionObject->getProperties();
        if (!count($props)) {
            throw new \Exception("No columns found for this entity.");
        }

        foreach ($props as $prop) {
            $reflectionProperty = new \ReflectionProperty($this, $prop->name);
            $attributes = $reflectionProperty->getAttributes('Nawafinity\PhpSimpleOrm\Attributes\Column');


            if (!count($attributes)) continue;

            foreach ($attributes as $attribute) {
                $this->fields[] = $attribute->newInstance()->name;
            }
        }
    }


    public function select(array|string $fields = "*")
    {
        if (is_array($fields)) {
            $this->query['SELECT'] = implode(",", $fields);
        } else {
            $this->query['SELECT'] = implode(", ", $this->fields);
        }


        return $this;
    }

    public function where(string $field, string $operator, string $value)
    {
        $this->query['WHERE'] = "`${field}`" . $operator . "'$value'";

        return $this;
    }

    public function get()
    {
        // @TODO Implement this method to fire the query and get the date, and map it to the current object.
    }

    public function toSQL()
    {
        return "SELECT " . $this->query['SELECT'] . " FROM " . "`$this->tableName` " . 'WHERE ' . $this->query['WHERE'];
    }
}
