<?php
//今有車輛「汽車」和「機車」,請使用物件的繼承/介面描述二者相同與差異,及二物件的執行程式碼 

//「汽車」與「機車」都是車，他們有相同的地方，因此可以透過interface定義相同的方法(vehicle)，再宣告car和motorcycle去實作vehicle的方法。
//movement是移動速度，作為父類別，car和motorcycle為子類別去繼承movement，父類別已經寫好function，子類別繼承後可直接呼叫，亦可覆寫其function。
interface vehicle{
	public function color();
    public function oil();
    public function wheels();
}
class movement {
    private $speed;
    public function setSpeed($s){
        $this->speed = $s;
    }
    public function getSpeed(){
       return $this->speed;
    }
}
class car extends movement implements vehicle {
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
class motorcycle extends movement implements vehicle {
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
$TOYOTA=new car('white',35,4,'matte',5);
echo $TOYOTA->oil()."</br>";
$TOYOTA->setSpeed(130);
echo $TOYOTA->getSpeed()."</br>";
$GP=new motorcycle('black',3,2);
echo $GP->wheels()."</br>";
$GP->setSpeed(90);
echo $GP->getSpeed()."</br>";
?>