<?php
class Rectangle
{
    public $x;
    public $y;
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function calculateSquare(): float
    {

        if(($this->x)<=0 or ($this->y)<=0){
            return 0;
        }
            return $this->x * $this->y;
    }
}
class Circle
{
    const PI=3.14;
    public $r;
    public function __construct(float $r)
    {
        $this->r = $r;
    }
    public function calculateSquare(): float
    {
        if ($this->r<=0){
            return 0;
        }
        return self::PI * ($this->r ** 2);
    }
}
class Pyramid {
public $apofema;
public $n;
public $side;
public $perimetr;
public $s1;
public $s2;
public $s;
    public function __construct(float $apofema, float $n, float $side)
    {
        $this->apofema;
        $this->n;
        $this->side;
        $this->perimetr;
        $this->s1;
        $this->s2;
        $this->s;
    }
    public  function  calculateSquare(): float {
        if (($this->apofema)<=0 or ($this->n)<=0 or ($this->side)<=0) {
            return 0;
        }
        $this->perimetr=($this->side)*($this->n);
        $this->s1=($this->perimetr)*($this->apofema/2);
        $this->s2=$this->n*power($this->apofema,2)/(4*tan(180/($this->n)));
return $this->s=($this->s1)+($this->s2);
}
}
$x=(float)rand();
$y=(float)rand();
$rectangle= new Rectangle($x, $y);
$r=(float)rand();
$circle=new Circle($r);
$apofema=(float)rand();
$n=rand();
$side=(float)rand();
$pyramid=new Pyramid($apofema, $n, $side);
echo $rectangle->calculateSquare() . '</br>' . $circle->calculateSquare() . '</br>' . $pyramid->calculateSquare();
$arr=array('прямоугольник'=>$rectangle->calculateSquare(), 'круг'=>$circle->calculateSquare(), 'пирамида'=>$pyramid->calculateSquare());
sort($arr);
?>