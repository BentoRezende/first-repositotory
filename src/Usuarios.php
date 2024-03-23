<?php 
declare (strict_types=1);
namespace Bento\FirstRepositotory;

use PDO;
use PDOException;

$name1 = $_GET ["name1"];
$name2 = $_GET ["name2"];
$name3 = $_GET ["name3"];

$pdo = new PDO('mysql: host=localhost;dbname=exfabiano;charset=UTF8','root','');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    
    $sql = $pdo -> exec("INSERT INTO users(name) VALUES ('$name1')");
    $sql = $pdo -> exec("INSERT INTO users(name) VALUES ('$name2')");
    $sql = $pdo -> exec("INSERT INTO users(name) VALUES ('$name3')");
} catch (PDOException $err) {
    echo $err -> getMessage();
}

echo "ola {$name1} muito prazer". PHP_EOL;
echo('<br>');
echo "ola {$name2} muito prazer". PHP_EOL;
echo('<br>');
echo "ola {$name3} muito prazer". PHP_EOL;