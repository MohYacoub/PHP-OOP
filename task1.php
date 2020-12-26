<?php 
class student {
public $id;
public $name;
public $email;
public $mobile_number;
public function __construct($id,$name,$email,$mobile_number) {
    $this -> id = sprintf($id);
    $this -> name = $name;
    $this -> email = $email;
    $this -> mobile_number = sprintf($mobile_number);
}
}
class teacher extends student {
    public $salary;
    public $subjects;
    public function info($salary,$subjects) {
        $this -> salary = sprintf($salary);
        $this -> subjects = $subjects;
}
}
$sara = new student("123443","Sara","sara@orange.com","0777777777");
$sadi = new teacher("96432","Sadi","sadi@orange.com","0777788888");
$sadi -> info("800",["English", "Arabic", "Math", "science"]);
echo "<pre>";
print_r($sara);
echo "<br>";
print_r($sadi);


echo "<hr>";
echo "<hr>";
echo "<hr>";



class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

 
?>