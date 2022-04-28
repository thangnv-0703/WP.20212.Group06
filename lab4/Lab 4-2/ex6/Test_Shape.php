<?php
    include "Rectangle.php";
    include "Triangle.php";
    include "Circle.php";
    include "Color.php";
    include "Shape.php";

    $myCollection = array();

    //make a rectangle
    $r = new Rectangle;
    $r->width = 5;
    $r->height = 7;
    $myCollection[] = $r;
    unset($r);

    //make a triangle
    $t = new Triangle;
    $t->base = 4;
    $t->height = 5;
    $myCollection[] = $t;
    unset($t);

    //make a circle
    $c = new Circle;
    $c->radius = 3;
    $myCollection[] = $c;
    unset($c);

    //make a color
    $c = new Color;
    $c->name= " blue";
    $myCollection[] = $c;
    unset($c);

    foreach($myCollection as $value){
        if($value instanceof Shape){
            print("Area : " . $value->getArea()."<br>\n");
        }
        if($value instanceof Polygon){
            print("Sides : " . $value->getNumberOfSides()."<br>\n");
        }
        if($value instanceof Color){
            print("Color : " . $value->name."<br>\n");
        }
        print("<br>\n");
    }

?>