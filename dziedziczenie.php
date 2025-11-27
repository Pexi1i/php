<?php
class fruit {
    public $name;
    public $color;
    public function _construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro (){
        echo"the fruit is {$this->name} and the color is
        {$this->color}.";
    }
}
class strawberry extends fruit {
    public function message(){
        echo "Am I a fruit or a berry?";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();