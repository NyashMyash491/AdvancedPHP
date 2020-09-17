<?php
namespace app\models;

class User extends Model
{
    public $id;
    public $name = "";
    public $login = "";
    public $password = "";
    public $is_admin = "";


    /**
     * Метод для
     *
     * @return mixed
     */
    protected function getTableName():string
    {
        return 'users';
    }
}
