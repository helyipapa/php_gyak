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
    echo MathHelper::square(5);

    //keszits egy electricCar osztalyt ami orokli a cart és pluszban tartalmaz batteryCapacity tulajdonsagot

    class ElectricCar extends Car
    {
        public $batteryCapacity;

        public function __construct($brand,$type,$color)
        {
            
        }
        public function info()
        {
            parent::info();
            echo "akkumlatorkapacitasa: {$this->batteryCapacity} kWh.";
        }
    }

    //$eCar = new Electrical("Tesla,"Model 3","fehér",10000);
    class User{
        use GreetingTreat;
    }
    $user = new User();
    $user -> greet();

    $admin = new Admin();
    $admin -> greet("mozso");


?>

