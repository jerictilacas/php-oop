<?php

/**
 *  Define a class for a bicycle
 *  Properties: brand, model, price, year, description, weight_kg = storing weight in kg
 *  Methods: name, weight_lbs, set_weights_lbs
 */

/**
 * Method name: simple name for bicycle
 * Take brand, price, year, model and put them together in a string of your choosing
 *  to output a simple name for this bicycle
 *  Foreach instance we should able to able to find out its name
 *  And name should be combination of brand, model and year.
 *  Then for weight_lbs - convert kg to pounds
 *  1 kg = 2.20462226218 pounds
 *  If you have a certain number of kg and you want to find out the number of pounds
 *  you're going to multiply in order to find the value
 */

 /** Instantiate a few different objects
 * Practice setting and reading their properties
 *  Try calling all the methods to make sure they behave the way you expect.
 */


 class Bicycle
 {
     var $brand;
     var $model;
     var $year;
     var $desc = 'High quality mid drive bicycle';
     var $weight_kg = 0.0;

     function name()
     {
         return $this->brand .' '. $this->year. ' ' .$this->model . ' with ' . $this->desc .' ' ;
     }

     function weight_lbs()
     {
         $weight = $this->weight_kg;
         return floatval($weight) * 2.20462;
     }

 }

 $trek = new Bicycle();
 $trek->brand = 'Trek';
 $trek->model = 'Emonda';
 $trek->year = 2021;
 $trek->weight_kg = 2.0;

 $cd = new Bicycle();
 $cd->brand = 'Cannondale';
 $cd->model = 'Synanpse';
 $cd->year = 2020;
 $cd->weight_kg = 5.0;

 echo $trek->name() . "<br/>";
 echo $cd->name() . "<br/>";

 echo $trek->weight_kg . "<br/>";
 echo $trek->weight_lbs() . "<br/>";

?>