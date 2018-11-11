<?php
class Rectangle
{
    public $x;
    public $y;
    public function __construct()
    {
        $this->x = rand()/rand();
        $this->y = rand()/rand();
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
    public function __construct()
    {
        $this->r = rand()/rand();
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
    public function __construct()
    {
        $this->apofema=rand()/rand();
        $this->n=rand();
        $this->side=rand()/rand();
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
$rectangle= new Rectangle();
$circle=new Circle();
$pyramid=new Pyramid();
function sortObj($a, $b) {
    $al=$a->calculateSquare();
    $bl=$b->calculateSquare();
    if ($al==$bl) {
        return 0;
    }
return ($al>$bl)? -1:1;
}
$arr=['Прямоугольник'=>$rectangle, 'Круг'=>$circle, 'Пирамида'=>$pyramid];
var_dump($arr);
$putFile=serialize($arr);
file_put_contents(__DIR__ . '/file.txt', $putFile);
$getFile=file_get_contents(__DIR__ . '/file.txt');
$arr=unserialize($getFile);
uasort($arr, "sortObj");
var_dump($arr);
foreach ($arr as $index=>$value) {
    echo 'Приветик, я - ' . $index . ', моя площадь = ' . $value->calculateSquare() . '</br>';
}
?>