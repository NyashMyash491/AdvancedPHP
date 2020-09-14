<?php

//Задание 1 + 2
class Good {
    public $price = "";
    public $name = "";
    public $info = "";
    public $count = 0;

    public function __construct($price, $name, $info, $count)
    {
        $this->price = $price;
        $this->name = $name;
        $this->info = $info;
        $this->count = $count;
    }
    //Задание 3
    public function showPrice ($price) {
        echo "
        <h1>Стоимость товара</h1>h1>
        <p>$price</p>>
        ";
    }
    public function goodInfo () {
        echo "
        <h1>Информация о товаре</h1>
        <h2>Название</h2>
            <p>{$this->name}</p>
        <h2>Описание товара</h2>
            <p>{$this->info}</p>
        <h2>Стоимость товара</h2>
            <p>{$this->price}</p>
        <h2>Количество товара на складе</h2>
            <p>{$this->count}</p>
        ";
    }
}
//Задание 4
class DiscountGoods extends Good {
    public $discount = 0;

    function __construct($price, $name, $info, $count, $discount) {
        $this->discount = $discount;
        parent::__construct($price, $name, $info, $count);
    }
//Отличие класса-наследника в данном методе.
    function discountInfo()  {
        echo "
        <h2>Скидка на товар</h2>
        <p>{$this->discount}</p>
        ";
    }
}

//Получение итогов
$myGood = new Good("100","T-shirt","good t-shirt", 200);
$myGood->goodInfo();

echo "<hr>";

$myDiscountGood = new DiscountGoods("50","Discount T-shirt","good and cheap t-shirt", 20, 5);
$myDiscountGood->goodInfo();
$myDiscountGood->discountInfo();
