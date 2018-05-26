<?php
	class car {
		var $color ;
		function car() {	
			$this->color="紅色" ;
		}
		function set_color($c){
			$this->color=$c ;
		}
		function get_color(){
			return $this->color ;
		}
	} 
	class RV extends car {
		function show_drive($n){
			echo $n."輪驅動" ;
		}
    }
    //_________________________________________
    class A {
        function __construct(){
             echo "this class A 的建構子<p>";
        }
     }
      class B extends A{
        function noop(){
             echo "this class B 的member func<p>";
        }
     }
     class C extends B{
         function noop(){
             echo "this class c 的member func<p>";
         }
    }
    echo "\$i=new A =>";
     $i=new A;
     echo "\$i=new B =>";
     $j=new B;
     echo "\$i=new C =>";
     $k=new C;
     
 ?>
 <html>
 <title>繼承</title>
 <body>
 <?php
    //若class不想被繼承可宣告為 "final class xxx{...}"
	$JohnCar=new car ;
	$JohnCar->set_color("寶藍色") ;
	echo "John的車子".$JohnCar->get_color()."<p>" ;
	$MaryCar=new RV ;
	echo "Mary的車子" ;
    $MaryCar->show_drive(4) ;
    echo ",顏色".$MaryCar->get_color() ;
 ?>
 </body>
 </html>