<?php
$kokuseki=$_POST['kokuseki'];

$name=$_POST['name'];

$post=$_POST;

$res=aisatu($post);

echo $res;

function aisatu($post){
      $kokuseki=$post['kokuseki'];
      $name=$post['name'];
       if($kokuseki=='1'){
      $ret="私の名前は".$name."です。こんにちは。";
     }elseif($kokuseki=='2'){
      $ret="My name is ".$name." hello";
    }elseif($kokuseki=='3'){
      $ret="Ich bin ".$name." Guten Tag";
  }












return $ret;
}
?>
