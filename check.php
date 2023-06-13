<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/f09d85331a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<title>Kakao Health</title>
</head>
<body>

  <nav class = "navbar">
    <div class = "navbar_logo">
      <i class="fa-solid fa-house"></i>
      <b href="">kakaohealth</b>

    </div>
    <ul class = "navbar_menu">
      <li><a href="kakaohealth.html">Home</a></li>
      <li><a href="kakaofriends.html">Friends</a></li>
      <li><a href="">How</a></li>
      <li><a href="">Download</a></li>
    </ul>
    <ui class = "navbar_icons">
      <li><i class="fa-brands fa-twitch"></i></li>
      <li><i class="fa-brands fa-youtube"></i></li>
    </ui>
  </nav>

  <div class= "container2">
  </div>
          
<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem"><h2>카카오 소개</h2></div>
    <div class="menuitem"><h2>카카오 역사</h2></div>
    <div class="menuitem"><h2>카카오 헬스 사용법</h2>
        <ul class = "navbar_menu1">
          <li><a href="kakaobmi.html"><h3 style="color : black; font-size : 20px;">운동 정보 입력</h3></a></li>
          <li><a href="kakaohealth.html"><h3 style="color : black;font-size : 20px;">식단 관리</h3></a></li>
          <li><a href="kakaohealth.html"><h3 style="color : black;font-size : 20px;">출석 체크</h3></a></li>
        </ul>
    </div>
  </div>

  <div class="main">
  <h1>운동기록을 확인해 보세요</h1>
<?php
include_once("connect.php");

$title = $_POST["title"];
$author = $_POST["author"];
$date = $_POST["date"];

echo "<h3>추가할 운동의 이름은 {$title}, 시간은 {$author}, 날짜는 {$date}</h3>";

$sql = "INSERT INTO booklist (title, author, date) VALUES ('$title', '$author', '$date')";

if ($conn->query($sql)) {
    echo "<h3>운동 등록 성공</h3>";
} else {
    echo "<h3>운동 등록 실패</h3>";
}
?>

<br>
    <br>
    <br>
    <br>
    <br>
    
    <a href="kakaobmi.html" class="button-large">이전 페이지</a>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
</body>
</html>