<?php 
require_once '../vendor/autoload.php';

use Libs\Mysql;

$pdo = Mysql::connector();

$data = file_get_contents('php://input');
$data = json_decode($data, true);
$headers = getallheaders();

$request = json_encode(['headers' => $headers, 'data' => $data]);

try {
    $stmt = $pdo->prepare('INSERT INTO logs(method, request, url, incoming) VALUES (:method, :request, :url, 1)');
    $stmt->execute([
        ':method' => $_SERVER['REQUEST_METHOD'],
        ':request' => $request,
        ':url' => $_SERVER['REQUEST_URI']
    ]);

}catch(Exception $e) {
    echo $e->getMessage();
}
