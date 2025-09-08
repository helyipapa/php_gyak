<?php
    /*
    szükséges programok:XAMP(Apache,MySQL),Git,github,repo,VSC
    <?php ... ?>
    Változok
    */
    $name = "helyipapa";
    $age = 18;
    $city = "Törökszentmiklós";
    var_dump($name);

    echo "<br>Név: $name Életkor: $age Lakóhely: $city";
    //konstans
    define("PI",3.14);
    echo PI;

    //adattipusok: string,int,float,bool,array

    $message "egy";
    echo "kiir",$message, "értéket."," <br>\n";
    echo "kiir $message értéket. <br>\n";  
    echo "kiir {$message}darab értéket. <br>\n";

    print "kiir".$message. "értéket."." <br>\n";
    
    /*
    git parancsok
        git init:
        git add . :modositott fajlhozzaadasa az areahoz
        git commit -m "message" veglegesites
        git romete add origin https://github.com/felhasznalonev/.git : helyi a tavolihoz
            git config --global user.name
            git config --global user.email
        git branch -M main atnevezes
        git push -u origin main helyi tavoliba feltoltes

        hf tölcsd le otthon a repot a sajat htdocs mappadba
    */ 
?>