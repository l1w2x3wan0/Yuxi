<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/31
 * Time: 18:55
 * @ 反射
 */

class A
{
    public $one = '';
    public $two = '';

    //Constructor
    public function __construct()
    {
        //Constructor
    }

    //print variable one
    public function echoOne()
    {
        echo $this->one."\n";
    }

    //print variable two
    public function echoTwo()
    {
        echo $this->two."\n";
    }
}

//Instantiate the object
$a = new A();

//Instantiate the reflection object
$reflector = new ReflectionClass('A');

var_dump($reflector);

//Now get all the properties from class A in to $properties array
$properties = $reflector->getProperties();

var_dump($properties);
$i =1;
//Now go through the $properties array and populate each property
foreach($properties as $property)
{
    //Populating properties
    $a->{$property->getName()}=$i;
    //Invoking the method to print what was populated
    $a->{"echo".ucfirst($property->getName())}()."\n";

    $i++;
    var_dump($property);
}