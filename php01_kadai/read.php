<html>

<head>
    <meta charset="utf-8">
    <title>営業進捗管理(登録確認)</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .value3{
            width: 15%;
        }
    </style>

</head>

<body>
<table>
<div class="excel" >
    <p>Excel風　営業進捗管理(一覧確認)</p>
    <a href="./post.php"><img src="./img/icon_111112_256 2.png" class="icon"></a>
    <a href="./write.php"><img src="./img/icon_159142_256.png" class="icon"></a>
        
<tr class="header">
          <th class="item2">記入日</th>
          <th class="item2">担当者名</th>
          <th class="item2">メールアドレス</th>
          <th class="item2">会社名</th>
          <th class="item2">訪問日</th>
          <th class="item2">商談確度</th>
<?php
        // ファイルを開く
        $openFile = fopen('./data/data.txt', 'r');
        echo "<table border = 1>";
        // ファイル内容を1行ずつ読み込んで出力
        // fgets($openFile)で、1行を読み込み、それを$strに代入
        // 何も読み込むものがなくなると、while文が終了する
        while ($str = fgets($openFile)) {
            $ary = explode(",", $str); //文字列を配列に変換
            echo '<tr>';
            for($i = 0; $i < sizeof($ary); $i++){
                echo "<td> {$ary[$i]} </td>";
            }
            echo '</tr>';


            // nl2br ... textファイルの改行を<br>に変換する関数
            // echo nl2br($str);
            // var_dump($ary);
        };
        fclose($openFile);

?>
</table>
</body>

</html>

<!-- // 参考
// https://gray-code.com/php/make-the-board-vol5/

$current_date = null;
$data = null;
$file_handle = null;
$split_data = null;
$message = array();
$message_array = array();

if( $file_handle = fopen( './data/data.txt','r') ) {
    while( $data = fgets($file_handle) ){
        // 参考
        // https://www.vitoshacademy.com/php-reading-from-a-file-into-a-html-table/

        echo "<table border = 1>";
        $counter = 1;
        while(!feof($file_handle))
        {
            $split_data = preg_split( '/,/', $data);

            $message = array(
                'write_date' => $split_data[0],
                'name' => $split_data[1],
                'mail' => $split_data[2],
                'company_name' => $split_data[3],
                'visit_date' => $split_data[4],
                'score' => $split_data[5],
            );
    
            $line = fgets($file_handle);
            echo "<tr><td>$counter</td>";
            echo "<td>$split_data[0]</td>";
            echo "<td>$split_data[1]</td>";
            echo "<td>$split_data[2]</td>";
            echo "<td>$split_data[3]</td>";
            echo "<td>$split_data[4]</td>";
            echo "<td>$split_data[5]</td>";
            $counter++;
        };
            echo "</table>";

        }};

fclose($file_handle); -->