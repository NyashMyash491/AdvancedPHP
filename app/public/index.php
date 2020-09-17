<?
use app\services\Autoload;
use \app\models\Good;

include dirname(__DIR__) . "/services/Autoload.php";
spl_autoload_register([(new Autoload()), 'load']);

$user = new \app\models\User();

$userModel = $user->getOne(37);
var_dump($userModel); // Выводит объект, а не массив
echo '<hr>';
var_dump($user->getAll()); //Выводит массив объектов

$user = new \app\models\User();
$user->name = 'Timssssss';
$user->login = 'Tim007';
$user->password = '123456';
$user->is_admin = '1';

$user->save(); // Сохранение текущего пользователя
//$user->delete(20); // Удаление пользователя с id = 20


$user = new \app\models\Good();
$user->id = 2;
$user->name = 'Tim';
$user->price = 'Tim007';
$user->info = '123456';

//$user->insert();
//$user->save();


