<?php

$host = 'localhost';
$port = '5432';
$username = 'barenmaulana';
$password = 'maulana';
$dbname = 'barenmaulana';
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$username} password={$password}";

$conn = pg_connect($connection_string);

if (!$conn) {
    echo "<marquee>Not connected to db</marquee> \n";
}
