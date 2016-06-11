<?php
#This is just a test file
class myClass{
    public function myfun($x){
        if($x===4){
            echo "Yolo";
        }
        else{
            echo "Bolo";
        }

    }
    public function randNo(){
        $x=rand(1, 10);
        return $x;
    }
}
$x = new myClass;
$y=$x->randNo();
$x->myfun($y);
?>
