<?php
class PropertyTest
{
  private $data = array();
  public $declared = 1;
  private $hidden = 2;

  function __set($name, $value)
  {
    print "Settinng property '$name' to $value<br>";
    $this->data[$name] = $value;
  }

  function __get($name)
  {
    print "Getting '$name'<br>";
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }
    $trace = debug_backtrace();
    trigger_error("Undefind property via __get " . $name
      . " in file " . $trace[0]["file"]
      . " on line " . $trace[0]["line"]
      . E_USER_NOTICE . "<br>");
    return null;
  }

  function __isset($name)
  {
    print "Is '$name' set?<br>";
    return isset($this->data[$name]);
  }

  function __unset($name)
  {
    print "Unsetting '$name'<br>";
    unset($this->data[$name]);
  }

  function getHidden()
  {
    return $this->hidden;
  }
}
echo "<pre>\n";
$obj = new PropertyTest();
$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";

echo "Let's experiment with the property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() is not used...\n";
echo $obj->getHidden() . "\n";
echo "Privates are invisible outside the class, so __get() is used...\n";
echo $obj->hidden . "\n";
