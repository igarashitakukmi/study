<?php
#ラジオボタンで送信された値によってその国の挨拶文を返す関数をつくってください
#　例えば1(タイ)を渡されたら、コップンカーと返す感じです。

//ここにpostで値を取得する。
$kokuseki= $_POST['kokuseki'];
//
$name=$_POST['name'];

$post = $_POST;

//ここで国籍を自作関数に渡す。
 $res = aisatu($post);

 
echo $res;






function aisatu($postt){

    $param = $postt['kokuseki'];
    $name  = $postt['name'];
    if ($param == "2") {
     $ret=$name."さんは中国人です中国はニーハオが挨拶です。"; 
    } elseif($param == "1") {
     $ret = $name."さんは日本人です。日本はこんにちはが挨拶です。";
    } elseif($param=="3"){
    $ret=$name."さんはタイ人です。タイはコッップンカーが挨拶です。";
    }else{$ret=$name."さんは韓国人です。韓国人はアニョハセヨが挨拶です。";
  }
  $ret = add_otu($ret);
  return  $ret;
     
}

function add_otu ($param) {
    return $param . '乙';
}

?>



<!--
#<html>
#<body>
#<form action="send2.php" method="post">
#名前 :<input type="text" name="名前"><br>
#国籍 :<input type="radio" name="kokuseki1" value="日本"> 日本
 # <input type="radio" name="kokuseki2" value="中国">中国
  #<input type="radio" name="kokuseki3" value="タイ">タイ
# <input type="radio" name="kokuseki4" value="韓国">韓国

#<br>

#<input type="submit" value="送信">
#</body>
#</html>
-->

