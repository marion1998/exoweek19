<?php
    class StrUtils {
        private $str;
        public function __construct($string) {
            $this->setStr($string);
        }
        public function getStr(){
            return $this->str;
        }

        public function setStr($hey){
            $this->str = $hey;
        }

        public function italic(){   
            $this->str = "<i>" . $this->str . "</i>";
                }
        
        public function bold(){
            $this->str = "<b>" . $this->str . "</b>";
        }

        public function underline(){
            $this->str = "<u>" . $this->str . "</u> ";
        }

        public function capitalize(){
            $this->str = strtoupper($this->getStr());
        }

        public function uglify(){
            $this->italic();
            $this->bold();
            $this->underline();
        }
    }

?>