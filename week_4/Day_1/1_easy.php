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
        // a constuctor that sets width and height for the class
        public function __construct($width, $height) { 
            $this->width = $width;
            $this->height = $height; 
        } 
        
        // width * height = area
        public function getArea() { 
            return $this->width * $this->height; 
        } 
            
        // width * 2 + height * 2 = perimeter
        public function getPerimeter() { 
            return ($this->width * 2) + ($this->height * 2);
        } 
        
        // this function tests to see if rectangle is also a square
        public function isSquare() { 
            if($this->width = $this->height) {
                return false; 
            }
        } 
    } 


    $width = 160;
    $height = 75;

    echo "<h2>With a width of $width and a height of $height...</h2>";

    // a new instance of the rectangle class 
    $r = new Rectangle($width, $height);

    // echo the information in a manner that is easily read
    echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';
    echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';

    // another if statement to determine the output on the screen if 
    // it is also a square or not.
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