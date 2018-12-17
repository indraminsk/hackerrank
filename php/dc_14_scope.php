<?php
class Difference{
  private $elements=array();
  public $maximumDifference;

  //===my===
  public function __construct($elements) {
      $this->elements = $elements;
  }

  public function computeDifference() {
      $max = null;
      $min = null;

      foreach ($this->elements as $element) {
          $max = ($element > $max) ? $element : (is_null($max) ? $element : $max);
          $min = ($element < $min) ? $element : (is_null($min) ? $element : $min);
      }

      $this->maximumDifference = $max - $min;
  }
  //===end===

}    

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>
