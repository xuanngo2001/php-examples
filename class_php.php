<?php

class MyClass {
    const NAME = 'John Smith';
    
    function showConstant() {
        echo self::NAME . "\n";
    }
}

echo MyClass::NAME . "\n";

?>