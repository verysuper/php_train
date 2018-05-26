<?php
 	class car {
		var $color ;// 若protection 不可直接存取 data member
		function set_color($c){
			$this->color=$c ;
		}
		function get_color(){
			return $this->color ;
		}
    }
    //__________________________________________
    class cart {
        var $item ;
        var $total ;
        function AddOneItem($name,$cost){
        //    $this->item[]=$name ;
        //    $this->item[]=$cost;
            $this->item[$name] = $cost; 
        }
        function GetItem(){
        //    $c=count($this->item);
        //    for ($i=0; $i<$c; $i+=2){
        //       echo "項目 : ".$this->item[$i];
        //       echo " => 金額 : ".$this->item[$i+1]." 元<br>";
        //    }
            foreach($this->item as $key => $value){
                echo "項目 : $key => 金額 : $value 元<br>";
            }
        }
        function sum() {
        //    $c=count($this->item);
           $s=0;
        //    for ($i=1; $i<$c; $i+=2){
        //       $s+=(integer)$this->item[$i];
        //    }
            foreach($this->item as $key => $value){
                $s += $value;
            }
           return $s;
	    }
    }
    //__________________________________________
 ?>
 <html>
 <title>oop</title>
 <body>
 <?php
    echo "<hr>建一個類別並存取<p>";
	$MyCar=new car ;                
 	$MyCar->set_color("寶藍色") ;
    echo "車子顏色: " . $MyCar->get_color() ."<br>";
    echo $MyCar->color." <-直接存取"; //test 直接存取property不須加$符號
    //__________________________________________
    echo "<hr>宣告2個物件並存取<p>";
    $customer1=new cart ;
    $customer2=new cart ;
    $customer1->AddOneItem("主機板","3000") ;
    $customer1->AddOneItem("顯示卡","800") ;
    $customer1->AddOneItem("記憶體","1800") ;
    $customer2->AddOneItem("PC遊戲","2500") ;
    $customer2->AddOneItem("滑鼠","100") ;
    $customer2->AddOneItem("無線網卡","2500") ;
    $customer2->AddOneItem("LCD顯示器","8000") ;
    echo "第一位顧客採購內容: <br>";
    $customer1->GetItem();
    echo "<p>" ;
    echo "第二位顧客採購內容: <br>";
    $customer2->GetItem(); 
    echo "<p>";
    $total=$customer1->sum()+$customer2->sum();
    echo "今日營業額 $total 元";   
 ?>
 </body>
 </html>