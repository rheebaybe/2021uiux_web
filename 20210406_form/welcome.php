<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>form</title>
</head>
<body>
  <?
  $na = $_GET["name"];
  $email = $_GET["mail"];
  ?>
  이름 : <? echo $na; ?><br>
  메일 : <? echo$email; ?>

</body>
</html>
