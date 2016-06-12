<?php
class myClass{
    public function myfun($x){
        if($x==4){
            return "Yolo";
        }
        else{
            return "Bolo";
        }

    }
    public function randNo(){
        $x=rand(1, 10);
        return $x;
    }
}
?>
