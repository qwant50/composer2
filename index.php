<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/14/16
 * Time: 6:02 PM
 */

class View{
    public function printMessage(){
        echo 'Added automatically by Composer';
    }
}

$view = new View();
$view->printMessage();