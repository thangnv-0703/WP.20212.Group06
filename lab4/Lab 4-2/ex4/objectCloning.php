<?php
class ObjectTracker
{
  private static $nextSerial = 0;
  private $id;
  private $name;

  function __construct($name)
  {
    $this->name = $name;
    $this->id = ++self::$nextSerial;
  }

  function __clone()
  {
    $this->name = "Clone of $this->name";
    $this->id = ++self::$nextSerial;
  }

  function getID()
  {
    return $this->id;
  }

  function getName()
  {
    return $this->name;
  }

  function setName($name)
  {
    $this->name = $name;
  }
}

$ot = new ObjectTracker("Zeev's Object");
$ot2 = $ot;
$ot2->setName("Another object");
print $ot->getID() . " " . $ot->getName() . "<br>";
print $ot2->getID() . " " . $ot2->getName() . "<br>";
