<?php
    class Sample  {
        //このクラス内では$this->userとして使えるように宣言
        //$userって書いてあるけど使うときはなぜか$this->userって書く。
        public $name;
        public $address;
        public $tel;
        public function __construct() {
            //newされた瞬間に実行される
            //インスタンス変数に3つのキーをもつ配列をセット
            $this->name =  'mizumoto';
            $this->address  = 'tokyo';
            $this->tel = '09000000000';
        }
       public function nekkyo($param) {
             $ret = $param . 'gogogo';
              return $ret;
        }
       public function next_year_sales_profit($number) {
             $ret = $number * 1.5 ;
              return $ret;
        }
       //もうコンストラクタでuserのインスタンス変数に値が入ってるから
        //returnするだけで返せる
        public function get_user_name() {
            return $this->name;
        }
       public function get_user_tel() {
            return $this->tel;
        }
       public function get_user_address() {
            return $this->address;
        }
       public function show_user_intro() {
            $ret = $this->name . 'です。'. $this->tel .'に電話ください彼女募集中です';
            return $ret;
        }
    }
?>

