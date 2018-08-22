<?php

    require "./strUtils.class.php";

    class Test extends \PHPUnit\Framework\TestCase {
        
        public function testItalic() {
            $this->assertEquals($myStr->italic(), "<i>" . $myStr->getStr() . "</i>"); 
        }
    } 
?>