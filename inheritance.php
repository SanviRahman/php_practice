<?php
class UserAuth{
    function login($userType){
        echo "$userType logged in";
    }
}
class Students extends UserAuth{
    function getName(){
        echo "<br/> Shanto";
    }
}

class Teachers extends UserAuth{
    function getNames(){
        echo "<br/> Sanvi Rahman";
    }
}



$s1= new Students();
$s1->login("Students are ");
$s1->getName();
echo "<br/>";

$s2= new Teachers();
$s2->login("Teachers are ");
$s2->getNames();

?>