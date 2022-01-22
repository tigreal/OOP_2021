<?php
class Point{

    private int $x = 0;
    private int $y=0;
    public function setVals(int $x, int $y){
        $this->x=$x;
        $this->y=$y;

    }
    public function getX(){

        return $this->x;
    }
    public function getY(){
        return $this->y;
    }



}





?>