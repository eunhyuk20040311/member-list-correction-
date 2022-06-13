<?php
    include("./dbcon.php");

    $no = $_GET["no"];

$sql = "SELECT * FROM member where sno=".$no;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $sizeprt = $row["ssize"]; 
    $addrprt =$row["saddr"];
    $brandprt = $row["sbrand"];
    $selecteprt = $row["sselecte"];


  }
} else {
  echo "0 results";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>제품 재선택</title>
</head>
<body>
<form action="updateok.php" method="post">
<input type="hidden" name="no" value="<?php echo $no; ?>">    
<div>
사이즈<input type="text" name="size" value='<?php echo $sizeprt; ?>'>
</div>
<div>
주소<input type="text" name="addr" value="<?php echo $addrprt; ?>">
</div>
<div>
브랜드
<input type="radio" name="brand" value="LG" <?php if($brandprt =="LG") echo "checked";?> >LG
<input type="radio" name="brand" value="SAMSUNG" <?php if($brandprt =="SAMSUNG") echo "checked";?>  >SAMSUNG
<div>
선택
<select name="selecte">
    <option value="(LG)듀얼에어컨" <?php if($selecteprt =="(LG)듀얼에어컨")?>>(LG)듀얼에어컨</option>
    <option value="(LG)75TV LG 울트라 HD TV" <?php if($selecteprt =="(LG)75TV LG 울트라 HD TV")?>>(LG)75TV LG 울트라 HD TV</option>
    <option value="(LG)공기청정기" <?php if($selecteprt =="(LG)공기청정기")?>>(LG)공기청정기</option>
    <option value="(LG)에어컨" <?php if($selecteprt =="(LG)에어컨")?>>(LG)에어컨</option>
    <option value="(SNAMSUNG)와인냉장고" <?php if($selecteprt =="(SAMSUNG)와인냉장고")?>>(SAMSUNG)와인냉장고</option>
    <option value="(SNAMSUNG)AI 건조기" <?php if($selecteprt =="(SAMSUNG)건조기")?>>(SNAMSUNGAI)AI 건조기</option>
    <option value="(SNAMSUNG)식기세척기" <?php if($selecteprt =="(SAMSUNG)식기세척기")?>>(SNAMSUNG)식기세척기</option>
    <option value="(SNAMSUNG)AI 세탁기" <?php if($selecteprt =="(SAMSUNG)세탁기")?>>(SNAMSUNG)AI 세탁기</option>
</select>
</div>
<div>
<input type="submit" value="수정">
</div>
</form>

</body>
</html>