<?php
    namespace App\Services;

    use App\Traits\GreetingTrait;
    use App\Traits\LoggerTrait;

    class Myservice
    {
        use GreetingTrait,LoggerTrait;

        public function run($bane="User")
        {
            $this -> log("Service elindult");
            echo $this -> greet("morzsa");
        }
    }
?>