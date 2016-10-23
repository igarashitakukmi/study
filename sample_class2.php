<?php








//
class sample{


public function aisatu($post){
  $kokuseki=$post['kokuseki'];
  $name=$post['name'];
if($kokuseki=='1'){
  $ret="名前".$name."    こんにちは。";
       }elseif($kokuseki=='2'){
    $ret="名前".$name."  ニーハオ。";
}


return $ret;



}


}


?>
