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
     *   isSquare() : Return true if the rectangle is a square, false otherwise.
     */


    ///////////////////////////
    // Put your code here!
    ///////////////////////////
    
  
    class Rectangle{
        public $width;
        public $height;
        
        function __construct($width,$height){
            $this ->$width=width;
            $this ->$height=height;
        }
        public function getArea(){
            return $this->width * $this->height;
        }
        public function getPerimeter(){
            return((2*($this->width))+(2*$this->height));
        }
        public function isSquare(){
            if ($this->width == $this->height){
                return true;
            }
            else{
                return false;
            }
        
        }
        
    }

    $width = 160;
    $height = 75;
    
    echo "<h2>With a width of $width and a height of $height...</h2>";

    $r = new Rectangle($width, $height);
    $r->width=$width;
    $r->height=$height;
    echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';
    echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';

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