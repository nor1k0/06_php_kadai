<?php

$nameA1 = $_POST['nameA1'];
$nameA2 = $_POST['nameA2'];
$nameA3 = $_POST['nameA3'];
$nameA4 = $_POST['nameA4'];
$nameA5 = $_POST['nameA5'];


$mailB1 = $_POST['mailB1'];
$mailB2 = $_POST['mailB2'];
$mailB3 = $_POST['mailB3'];
$mailB4 = $_POST['mailB4'];
$mailB5 = $_POST['mailB5'];

$company_nameC1 = $_POST['company_nameC1'];
$company_nameC2 = $_POST['company_nameC2'];
$company_nameC3 = $_POST['company_nameC3'];
$company_nameC4 = $_POST['company_nameC4'];
$company_nameC5 = $_POST['company_nameC5'];

$visit_dateD1 = $_POST['visit_dateD1'];
$visit_dateD2 = $_POST['visit_dateD2'];
$visit_dateD3 = $_POST['visit_dateD3'];
$visit_dateD4 = $_POST['visit_dateD4'];
$visit_dateD5 = $_POST['visit_dateD5'];

$scoreE1 = $_POST['scoreE1'];
$scoreE2 = $_POST['scoreE2'];
$scoreE3 = $_POST['scoreE3'];
$scoreE4 = $_POST['scoreE4'];
$scoreE5 = $_POST['scoreE5'];

ini_set('date.timezone', 'Asia/Tokyo');
$time = date('Y-m-d');

$file = fopen('data/data.txt', 'a');
fwrite($file, "$time," . "$nameA1," . "$mailB1," ."$company_nameC1," ."$visit_dateD1," ."$scoreE1". "\n");
fwrite($file, "$time," . "$nameA2," . "$mailB2," ."$company_nameC2," ."$visit_dateD2," ."$scoreE". "\n");
fclose($file);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>営業進捗管理(登録確認)</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<table>
<div class="excel" >
<p>Excel風　営業進捗管理(登録確認)　-->　以下の内容を登録しました。</p>
<a href="./post.php"><img src="./img/icon_159142_256.png" class="icon"></a>
<a href="./read.php"><img src="./img/icon_000932_256.png" class="icon"></a>

        </div>
<tr class="header">
          <th class="item1"> </th>
          <th class="item2">担当者名</th>
          <th class="item2">メールアドレス</th>
          <th class="item2">会社名</th>
          <th class="item2">訪問日</th>
          <th class="item2">商談確度</th>
        </tr>
        <tr>
          <td class="item1">1</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA1) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB1) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($company_nameC1) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($visit_dateD1) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($scoreE1) ?></td>
        </tr>

        <tr>
          <td class="item1">2</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA2) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB2) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($company_nameC2) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($visit_dateD2) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($scoreE2) ?></td>
        </tr>

        <tr>
          <td class="item1">3</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA3) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB3) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($company_nameC3) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($visit_dateD3) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($scoreE3) ?></td>
        </tr>

        <tr>
          <td class="item1">4</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA4) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB4) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($company_nameC4) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($visit_dateD4) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($scoreE4) ?></td>
        </tr>

        <tr>
          <td class="item1">5</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA5) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB5) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($company_nameC5) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($visit_dateD5) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($scoreE5) ?></td>
        </tr>
        
        </table>
        </form>
</body>

</html>