<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전자제품 선택 사항</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
사이즈<input type="text" name="size">
</div>
<div>
주소<input type="text" name="addr"><br>
</div>
<div>
브랜드
<input type="radio" name="brand" value="LG">LG
<input type="radio" name="brand" value="SAMSUNG">SAMSUNG
</div>
<div>
제품 선택
<?php echo "<br>";?>
<select name="selecte">
    <option value="(LG)듀얼에어컨">(LG)듀얼에어컨</option>
    <option value="(LG)75TV LG 울트라 HD TV">(LG)75TV LG 울트라 HD TV</option>
    <option value="(LG)공기청정기">(LG)공기청정기</option>
    <option value="(LG)에어컨">(LG)에어컨</option>
    <option value="(SNAMSUNG)와인냉장고">(SNAMSUNG)와인냉장고</option>
    <option value="(SNAMSUNG)AI 건조기">(SNAMSUNGAI)AI 건조기</option>
    <option value="(SNAMSUNG)식기세척기">(SNAMSUNG)식기세척기</option>
    <option value="(SNAMSUNG)AI 세탁기">(SNAMSUNG)AI 세탁기</option>
</select>
</div>
<div>
<input type="submit">
</div>
</form>

</body>
</html>