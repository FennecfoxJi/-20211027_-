<?php
$server = "localhost";
$user = "JSH";
$password = "1234";
$dbname = "test";

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    echo "<h2>접속에 실패했습니다.</h2>";
} else {
    echo "<h2>음식 정보를 가져옵니다.</h2>";
}
?>