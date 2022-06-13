<?php
include("./dbcon.php");

$no = $_POST["no"];
$size = $_POST["size"];
$addr = $_POST["addr"];
$brand = $_POST["brand"];
$selecte = $_POST["selecte"];

$sql = "UPDATE member SET ssize='$size', saddr='$addr', sbrand='$brand',sselecte='$selecte' WHERE sno=".$no;

if (mysqli_query($conn, $sql)) {
  echo "정보가 수정되었습니다.";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div>
<a href="./input.php">회원입력</a> 
<a href="./list.php">회원목록</a>
</div>

