<?php
    /*osztaly
    -osztaly, objektum
    -Konstruktor/destruktor
    -tulajdonsagok(public,private,protected)
    -oroklodes(extends)
    -trait (fgv-ek,amiket kulonbozo ostazylbol szeretnek elerni)
    */

    //készits car osztalyt,márka,tipus,szin tulajdonsággal,konstruktor is legyyen

    class Car
    {
        public $brand;
        public $type;
        private $color;

        public function __construct($brand,$type,$color)
        {
            $this->brand = $brand;
            $this->type = $type;
            $this->color = $color;
        }

        public function info()
        {
            echo "$this->brand $this->type $this->color";
        }
    }
    $car = new Car ("BMW","M5","piros");
    $car -> info();
    //echo $car -> brand;

    //hozz letre a mathHelper osztalyt amibe legye egy statikus valtozo (pi) es egy statikus metodus squre neven.

    class MathHelper{
        public static $pi = 3.14;

        public static function square($num)
        {
            return $num*$num;
        }
    }

    echo MathHelper::$pi;
?>