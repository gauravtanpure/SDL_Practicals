<!DOCTYPE html>
<html>
<head>
  <title>Shape Area - Inheritance in PHP</title>
</head>
<body>
  <h2>Select a Shape</h2>
  <form method="post">
    <input type="radio" name="shape" value="triangle" required> Triangle<br>
    <input type="radio" name="shape" value="square"> Square<br>
    <input type="radio" name="shape" value="circle"> Circle<br><br>

    <label>Enter dimension(s):</label><br>
    Base/Side/Radius: <input type="number" name="val1" step="0.01" required><br>
    Height (only for triangle): <input type="number" name="val2" step="0.01"><br><br>

    <input type="submit" name="submit" value="Calculate Area">
  </form>

  <?php
  class Shape {
    public function area() {
      return 0;
    }
  }

  class Triangle extends Shape {
    public $base, $height;
    public function __construct($b, $h) {
      $this->base = $b;
      $this->height = $h;
    }
    public function area() {
      return 0.5 * $this->base * $this->height;
    }
  }

  class Square extends Shape {
    public $side;
    public function __construct($s) {
      $this->side = $s;
    }
    public function area() {
      return $this->side * $this->side;
    }
  }

  class Circle extends Shape {
    public $radius;
    public function __construct($r) {
      $this->radius = $r;
    }
    public function area() {
      return 3.1416 * $this->radius * $this->radius;
    }
  }

  if (isset($_POST['submit'])) {
    $shape = $_POST['shape'];
    $val1 = $_POST['val1'];
    $val2 = isset($_POST['val2']) ? $_POST['val2'] : 0;

    if ($shape == "triangle") {
      $tri = new Triangle($val1, $val2);
      echo "<h3>Area of Triangle: " . $tri->area() . "</h3>";
    } elseif ($shape == "square") {
      $sq = new Square($val1);
      echo "<h3>Area of Square: " . $sq->area() . "</h3>";
    } elseif ($shape == "circle") {
      $cir = new Circle($val1);
      echo "<h3>Area of Circle: " . $cir->area() . "</h3>";
    }
  }
  ?>
</body>
</html>
