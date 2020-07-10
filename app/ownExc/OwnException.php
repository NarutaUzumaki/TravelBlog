<?php


namespace ownExc;


use core\Controller;
use resources\View;
use Throwable;

class OwnException extends \RuntimeException {
    public function __construct($details = null){
        self::errorMessage($details);
    }

    public function errorMessage($details = null){
        if ($details){
            $errorMsg = 'Error on line '. $this->getLine(). ' in '. $this->getFile().'.'.$this->getMessage().'More info:'.$details;
        }
        self::report($errorMsg);
    }


    public function report($data = null){
       $sum =  function ($a, $b){
            return $a + $b;
       };

       $sum(5,5);

        View::make('report', $data);
    }
}