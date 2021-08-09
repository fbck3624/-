<?php
//今有車輛「汽車」和「機車」,請使用物件的繼承介面描述二者相同與差異,及二物件的執行程式碼 

//「汽車」與「機車」都是車，他們有相同的地方，因此可以透過interface定義相同的方法(vehicle)，
//再宣告car和motorcycle作為子類別去繼承vehicle並實作方法，子類別亦可宣告自己的方法。
interface vehicle{
	public function color();
    public function oil();
    public function wheels();
}
class car implements vehicle {
    private $color,$oil,$wheels,$window;
    function __construct($c,$o,$wh,$w){
		$this->color=$c;
		$this->oil=$o;
        $this->wheels=$wh;
        $this->window=$w;
	}
    public function color(){
        return $this->color;
    }
    public function oil(){
        return $this->oil;
    }
    public function wheels(){
        return $this->wheels;
    }
    public function window(){
        return $this->window;
    }
}
class motorcycle implements vehicle {
    private $color,$oil,$wheels;
    function __construct($c,$o,$wh){
		$this->color=$c;
		$this->oil=$o;
        $this->wheels=$wh;
	}
    public function color(){
        return $this->color;
    }
    public function oil(){
        return $this->oil;
    }
    public function wheels(){
        return $this->wheels;
    }
    
}
$TOYOTA=new car('white',35,4,'matte');
echo $TOYOTA->oil()."</br>";
$GP=new motorcycle('black',3,2);
echo $GP->wheels()."</br>";
?>