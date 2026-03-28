<?php


$dbname   = 'docker_test1';
$username = 'root';
$password = 'root';
try {
    $pdo = new \PDO("mysql:host=mysql;dbname=$dbname", $username,  $password);
} catch (Exception $e) {
    print $e->getMessage() . "\n";
}

$stmt = $pdo->query("SELECT * FROM main");

foreach ($stmt as $row) {
    echo $row['title']."<br>";
}
print "OK2\n";

/*
$pdo = new PDO(
    "mysql:host=localhost:8080;dbname=docker_test1",
    "root",
    "root"
);

$stmt = $pdo->query("SELECT * FROM main");

foreach ($stmt as $row) {
    echo $row['title']."<br>";
}
*/