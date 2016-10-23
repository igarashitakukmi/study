<?php
require_once('sample_class2.php');

$sample=new sample();
$kokuseki=$_POST['kokuseki'];

$name=$_POST['name'];
 
$post=$_POST;
$res=$sample->aisatu($post);


echo $res;





?>
