<?php
class MultiApp{
    public $name = "Sanvi Rahman";
    function getName(){
        echo $this->name ."<br/>";
    }
    function updateName($newName){
        $this->name=$newName;
    }
 }
$p1=new MultiApp();
$p1->getName();
$p1->updateName("Oboni");
$p1->getName();

?>
