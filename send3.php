i<?php
$kokuseki=$_POST['kokuseki'];

$name=$_POST['name'];

$post=$_POST;

$res=aisatu($post);
#()の中が$postなのは？
#$resとはそもそも何？
#$res=aisatu($post);は何のためにあるのか？ 
echo $res;

function aisatu($postt){
   $param=$postt['kokuseki'];
   $name=$postt['name'];
   if($param=='1'){
    $ret="あなたの名前は".$name."で、出身は日本です。こんにちは。";
  }elseif($param=='2'){
    $ret="あなたの名前は".$name."で、出身は中国です。ニーハオ。";
  }elseif($param=='3'){
    $ret="あなたの名前は".$name."で、出身はタイです。サワディー。";
  }elseif($param=='4'){
    $ret="あなたの名前は".$name."で、出身は韓国です。アニョハセヨ。";
  }else{
    $ret="あなたの名前は".$name."で、出身はアメリカです。ハロー。";
  }

$bbb = add_otsu($ret);
return $bbb;
}

function add_otsu($param){

 return $param.'乙';
}
?>
