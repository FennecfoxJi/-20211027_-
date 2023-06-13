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

  <div class= "container3">
  </div>
          
<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem"><h2>카카오 소개</h2></div>
    <div class="menuitem"><h2>카카오 역사</h2></div>
    <div class="menuitem"><h2>카카오 헬스 사용법</h2>
        <ul class = "navbar_menu1">
          <li><a href="kakaobmi.html"><h3 style="color : black; font-size : 20px;">운동 정보 입력</h3></a></li>
          <li><a href="kakaobab.html"><h3 style="color : black;font-size : 20px;">식단 관리</h3></a></li>
          <li><a href="kakaohealth.html"><h3 style="color : black;font-size : 20px;">출석 체크</h3></a></li>
        </ul>
    </div>
  </div>

  <div class="main">
  <h1>식사기록을 확인해 보세요</h1>
<?php
include_once("connect2.php");

$food = $_POST["food"];
$cal = $_POST["cal"];
$date = $_POST["date"];

echo "<h3>추가할 음식의 이름은 {$food}, 칼로리는 {$cal}, 날짜는 {$date}</h3>";

$sql = "INSERT INTO foodlist (food, cal, date) VALUES ('$food', '$cal', '$date')";

if ($conn->query($sql)) {
    echo "<h3>음식 등록 성공</h3>";
} else {
    echo "<h3>음식 등록 실패</h3>";
}
?>

<br>
    <br>
    <br>
    <br>
    <br>
    
    <a href="kakaobab.html" class="button-large">이전 페이지</a>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
</body>
</html>