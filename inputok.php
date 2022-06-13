<?php
include("./dbcon.php");

$size = $_POST["size"];
$addr = $_POST["addr"];
$brand = $_POST["brand"];
$selecte = $_POST["selecte"];

$sql = "INSERT INTO member (ssize, saddr, sbrand, sselecte) VALUES ('$size', '$addr', '$brand','$selecte')";

if (mysqli_query($conn, $sql)) {
  echo "선택하신 품목이 저장되었습니다. 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

<div>
<a href="./input.php">회원입력</a> 
<a href="./list.php">회원목록</a>
</div>


