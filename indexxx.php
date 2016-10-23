<?php
//こうやってクラスを読み込みます。
requiire_once('sample_class.php');
//こうやって設計図を実体化します。
$sample = new sample();
echo $sample->get_user_name();
echo $sample->get_user_tel();
echo $sample->get_user_address();
echo $sample->show_user_intro();
?>

