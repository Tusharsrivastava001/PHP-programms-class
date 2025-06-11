<?php
interface flyable{
    public function fly();
};
class bird implements flyable{
    public function fly(){
        echo "Bird is flying";
    }
};
$mybird=new bird();
$mybird->fly();

?>