
<?php

    include("Firework.php");

    class FireworkInputService {

        static function run(){
            $myfile = fopen("Fireworks.csv", "r") or die("Unable to open file!");
            $mapVariable = array();
            $isFirstLine = true;

            while(!feof($myfile)) {
                if ($isFirstLine) {
                    $mapVariable = explode(";", fgets($myfile));
                    $isFirstLine = false;
                }
                $array = explode(";", fgets($myfile));
                $firework = new Firework(
                    $array[array_search("name", $mapVariable)],
                    $array[array_search("amount", $mapVariable)],
                    $array[array_search("duration", $mapVariable)],
                    $array[array_search("style", $mapVariable)]
                );
                if ($firework->get_amount() != "" || $firework->get_amount() != null) {
                    for ($i=0; $i < $firework->get_amount(); $i++) {
                        echo $firework->get_name() . " " . $firework->get_duration() . " " . $firework->get_style() . " ." . "<br>"; 
                    }
                }
                echo "<br>";
            }
            fclose($myfile);
        }
        
    }

?>