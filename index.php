<?php
class Animal
{
    public static function dog()
    {
        echo "bow bow";
    }
    function __construct()
    {
        self::dog();
    }
}
$animal = new Animal();
?>
