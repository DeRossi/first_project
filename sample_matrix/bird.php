<?php

/**
* An example of duck typing in PHP
*/

interface CanFly {
  public function fly();
}

interface CanSwim {
  public function swim();
}

class Bird {
  public function info() {
    echo "Tôi là {$this->name}\n";
    echo "Tôi là chim\n";
  }
}

/**
* some implementations of birds
*/
class Dove extends Bird implements CanFly {
  var $name = "Bồ Câu";
  public function fly() {
    echo "Tôi bay như bồ câu\n";
  } 
}

class Penguin extends Bird implements CanSwim {
  var $name = "Chim CC";
  public function swim() {
    echo "Tôi bơi như chim cc\n";
  } 
}

class Duck extends Bird implements CanFly, CanSwim {
  var $name = "Vịt";
  public function fly() {
    echo "Tôi bay như vịt\n";
  }
  public function swim() {
    echo "Tôi bơi như vịt\n";
  }
}

/**
* a simple function to describe a bird
*/
function describe($bird) {
  if ($bird instanceof Bird) {
    $bird->info();
    if ($bird instanceof CanFly) {
      $bird->fly();
    }
    if ($bird instanceof CanSwim) {
      $bird->swim();
    }
  } else {
    die("<h1>Đây không phải chim.</h1>");
  }
}
echo "<pre>";
// describe these birds please
describe(new Penguin);
echo "---\n";

describe(new Dove);
echo "---\n";

describe(new Duck);
echo "</pre>";