<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Create a class called "Rectangle".
     * Your class should have a constructor that takes two parameters: a width and height.
     *
     * Add three public functions to your class:
     *   getArea() : Calculate and return the area of the rectangle
     *   getPerimeter() : Calculate and return the perimeter of the rectangle
     *   isSquare() : Return true of the rectangle is a square, false otherwise.
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////
    class Rectangle {
        public $width;
        public $height;
        function __construct($width,$height){
            $this->width = $width;
            $this->height = $height;
        }
        //multiplies height times width to get area
        public function getArea($width,$height){
          return $width * $height;
        }
        //multiplies width and height by two and adds
        public function getPerimeter($width,$height){
            return ($width*2) + ($height*2);
        }
        //returns true if both height and width are even
        public function isSquare(){
            return($this->width == $this->height);
        }
            
    }
    

    $width = 160;
    $height = 75;

    echo "<h2>With a width of $width and a height of $height...</h2>";

    $r = new Rectangle($width, $height);

    echo '<p>The area of the rectangle is ' . $r->getArea($width,$height) . '</p>';
    echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter($width,$height) . '</p>';

    echo '<p>This rectangle is ';
    if ($r->isSquare()) {
        echo 'also';
    } else {
        echo 'not';
    }
    echo ' a square.</p>';

    ?>

</p>

</body>
</html>