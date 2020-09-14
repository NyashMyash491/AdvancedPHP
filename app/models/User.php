<?php
use app\models\Model;

class User extends Model
{
    public $id;
    public $name;
    public $login;
    public $password;


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
