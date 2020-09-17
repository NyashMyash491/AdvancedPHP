<?php
namespace app\models;

use app\services\DB;

abstract class Model
{
    /**
     * Метод для
     *
     * @return mixed
     */
    abstract protected function getTableName():string;

    /**
     * @return DB
     */
    protected function getDB()
    {
        return DB::getInstance();
    }

    public function getOne($id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id ";
        $params = [':id' => $id];

        return $this->getDB()->find($sql, $params);
    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";

        return $this->getDB()->findAll($sql);
    }

    protected function insert()
    {
        foreach ($this as $fieldName => $value)
        {
            $tableName = $this->getTableName();
            if ($fieldName == "id")
                continue;
            $sql = "INSERT INTO $tableName ($fieldName) VALUES ($value)";

            if (!is_array($value))
            {
                $params = explode("\n", $value);
                $params = [':value' => $value];
            }
                return $this->getDB()->execute($sql, $params);
            }
    }

    protected function update($id)
    {
        foreach ($this as $fieldName => $value)
        {
            if ($fieldName == "id")
                continue;
            $tableName = $this->getTableName();
            $sql = "UPDATE {$tableName} SET $fieldName = $value WHERE id = :id";
            $params = [':id' => $id];
                return $this->getDB()->execute($sql, $params);
        }
    }

    public function save()
    {
        if (empty($this->id))
        {
            return $this->insert();
        }
        return $this->update($this->id);
    }

    public function delete($id)
    {
        foreach ($this as $fieldName => $value)
        {
            $tableName = $this->getTableName();
            $sql = "DELETE FROM $tableName WHERE id = :id ";
            $params = [':id' => $id];

            return $this->getDB()->execute($sql, $params);
        }
    }
}