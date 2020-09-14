<?
use app\models\Good;
use app\services\DB;

include dirname(__DIR__) . "/services/Autoload.php";
spl_autoload_register([(new Autoload()), 'load']);

$bd = new DB();
$good = new Good($bd);
echo '<hr>';
echo $good->getAll();

