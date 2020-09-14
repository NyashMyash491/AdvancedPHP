<?php
namespace app\models;

class Parcel extends Model
{
    public $id;
    public $number;
    public $dateOfOrder;
    public $isDelivered;

    protected function getTableName():string
    {
        return 'parcels';
    }
}