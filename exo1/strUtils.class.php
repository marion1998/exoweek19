<?php
    class StrUtils {
        private $str;
        public function __construct($string) {
            $this->str = $string;
        }

        public function italic(){
            return "<h4> Italic : </h4> <i>" . $this->str . "</i> <hr>";
                }
        
        public function bold(){
            return "<h4> Bold : </h4>  <b>" . $this->str . "</b> <hr>";
        }

        public function underline(){
            return "<h4> Underline : </h4> <u>" . $this->str . "</u> <hr>";
        }

        public function capitalize(){
            return "<h4> Capitalize : </h4> <>" . $this->str . "</> <hr>";
        }
    }

    // $myStr = new StrUtils('hello');



?>