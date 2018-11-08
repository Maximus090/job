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
    public $n; // Количество сторон основания
    public $side;
    public $perimetr;
    public $s1; // Площадь боковой поверхности
    public $s2; // Площадь основания(многоугольника)
    public $s;
    public function __construct(float $apofema, int $n, float $side)
    {
        $this->apofema=$apofema;
        $this->n=$n;
        $this->side=$side;

    }
    public  function  calculateSquare(): float {
        if (($this->apofema)<=0 or ($this->n)<=0 or ($this->side)<=0) {
            return 0;
        }
        $this->perimetr=($this->side)*($this->n);
        $this->s1=($this->perimetr)*($this->apofema/2);
        $this->s2=($this->n)*pow($this->apofema,2)/(4*tan(180/($this->n)));
        return $this->s=($this->s1)+($this->s2);
    }
}
$x=rand()/rand();
$y=rand()/rand();
$rectangle= new Rectangle($x, $y);
$r=rand()/rand();
$circle=new Circle($r);
$apofema=rand()/rand();
$n=rand();
$side=rand()/rand();
$pyramid=new Pyramid($apofema, $n, $side);
$rectangle1=$rectangle->calculateSquare();
$circle1=$circle->calculateSquare();
$pyramid1=$pyramid->calculateSquare();
$arr=['Прямоугольник' => $rectangle1, 'Круг' => $circle1, 'Пирамида' => $pyramid1];
var_dump($arr);
$arr2=[$rectangle, $circle, $pyramid];
    $putFile=serialize($arr2);
    file_put_contents(__DIR__ . '/file.txt', $putFile);
    $getFile=file_get_contents(__DIR__ . '/file.txt');
    $arr3=unserialize($getFile);
    var_dump($arr3);
$arr4=['Прямоугольник'=>$arr3[0]->calculateSquare(), 'Круг'=>$arr3[1]->calculateSquare(), 'Пирамида'=>$arr3[2]->calculateSquare()];
arsort($arr4);
foreach ($arr4 as $index=>$value) {
    echo $index . ' = ' . $value . '</br>';
}
?>