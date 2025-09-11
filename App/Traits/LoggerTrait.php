<?php

    namespace App\Traits;

    trait LoggerTrait
    {
        public function log($message = "Vendég bejelentkezve")
        {
            echo "Log: $message";
        }
    }
?>