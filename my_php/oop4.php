<?php
   abstract class car { 
        protected $color ;
        abstract function get_color(); 
        abstract function set_color($n);
   }
   class mycar extends car {
        private $weight=1500;
        function get_color(){
             return $this->color;
        }
        function set_color($newcolor){
             $this->color=$newcolor ;
        }
        function get_weight(){ 
             return $this->weight;
        }
   }
   $a=new mycar ;
   $a->set_color("紅色") ;
   echo "車身是".$a->get_color()."<br>";
   echo "車重是".$a->get_weight()."公斤<p>";
   //___________________________________________
   interface width {
    public function get_width();
    public function set_width($w);
    }
    interface area {
        public function get_area();
        public function get_around();
    }
    class squareA implements width { //implements width
        private $w;
        public function get_width(){
            return $this->w;
        }
        public function set_width($newW){
            $this->w=$newW ;
        }
    }
    class squareB implements width, area { //implements width, area
        private $w;
        public function get_width(){
            return $this->w;
        }
        public function set_width($newW){
            $this->w=$newW ;
        }
        public function get_area(){
            return $this->w * $this->w;
        }
        public function get_around(){
            return 4*$this->w;
        }
    }
    $a=new squareA;
    $a->set_width(10);
    echo "A width ? ". $a->get_width()."<p>";
    $b=new squareB;
    $b->set_width(30);
    echo "B width ? ". $b->get_width()."<br>";
    echo "B area ? ". $b->get_area()."<br>";
    echo "B around ? ". $b->get_around()."<br>";
?> 
 <html>
 <title>抽象 & 介面</title>
 <body>

 </body>
 </html>