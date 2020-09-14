<?php
namespace app\services;

class DB implements IDB
{
    public function find($sql)
    {
        return 'find ' . $sql;
    }

    public function findAll($sql)
    {
        return 'findAll ' . $sql;
    }
}