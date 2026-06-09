<?php
class car(){
    public $model;
    public $color;
    
    public function displaydetails(){
        echo "Model:".this->$model;
        echo "color:".this->$color;
    }
}
$car1 = new car();
$car1->model = "toyota corolla";
$car1->color = "green";
$car1->displaydetails();
?>