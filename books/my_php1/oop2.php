<?php
	class car {
		var $color ;
		function __construct() { //or 與class同名
			$this->color="紅色" ;
		}
		function set_color($c){
			$this->color=$c ;
		}
		function get_color(){
			return $this->color ;
		}
    } 
    //____________________________________________
    class test {
        private $val;
        function __construct() {
               $this->val=9;
               echo "產生物件<p>";
        }
        public function get_val(){
               return $this->val;
        }
        function __destruct(){ //網頁跑完後自動執行
               echo "<p>刪除物件<p>";
               echo "<hr width=50% align=left>";
        }
   }
 ?>
 <html>
 <title>建構子&解構子</title>
 <body>
 <?php
    echo "<hr>建構子<p>";
	$ACar=new car ;
	$ACar->set_color("寶藍色") ;
	echo "A車".$ACar->get_color()."<p>" ;
	$BCar=new car ;
    echo "B車".$BCar->get_color() ;
    echo "<hr>解構子<p>";
    $a=new test;
    echo $a->get_val();
 ?>
 </body>
 </html>