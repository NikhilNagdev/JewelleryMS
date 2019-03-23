<?php
/**
 * Created by PhpStorm.
 * User: Shailu
 * Date: 21-03-2019
 * Time: 04:18 PM
 */
require_once 'Table.class.php';

class Category extends Table
{
    public function __construct($result = null)
    {
        parent::__construct("categories", $result);
    }

    public function insert()
    {
        return CRUD::insert($this->table_name, $this->columns_values);
    }

    public function update()
    {
        return CRUD::update($this->table_name, $this->columns_values, "category_id={$this->category_id}");
    }

    public function delete()
    {
        return CRUD::delete($this->table_name, "category_id={$this->category_id}");
    }
}