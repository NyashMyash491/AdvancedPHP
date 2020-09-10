<?php

//Задание 6
class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
class B extends A {
}
$a1 = new A(); //Создание экземпляра класса А
$b1 = new B(); //Создание экземпляра класса В
$a1->foo(); //Увеличение статичной переменной "х" на 1 в экземпляре класса "А" и вывод ее на экран
$b1->foo(); //Увеличение статичной переменной "х" на 1 в экземпляре класса "В" и вывод ее на экран
$a1->foo(); //Увеличение статичной переменной "х" на 1 в экземпляре класса "А" и вывод ее на экран
$b1->foo(); //Увеличение статичной переменной "х" на 1 в экземпляре класса "В" и вывод ее на экран

//Статичные переменные принадлежат каждому конкретному классу.
//Когда мы наследуем статичную переменную "х" от класса А в класс В, то по сути
//мы создаем новую статичную переменную.
//Получается, что у каждого класса есть своя некая переменная "х", которая и увеличивается на 1.