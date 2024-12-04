
<?php

    class Firework {
        private $name;
        private $amount;
        private $duration;
        private $style;

        function __construct($name, $amount, $duration, $style){
            $this->name = $name;
            $this->amount = $amount;
            $this->duration = $duration;
            $this->style = $style;
        }
        
        function get_name() {
            return $this->name;
        }
        
        function get_amount() {
            return $this->amount;
        }
        
        function get_duration() {
            return $this->duration;
        }
        
        function get_style() {
            return $this->style;
        }
    }

?>