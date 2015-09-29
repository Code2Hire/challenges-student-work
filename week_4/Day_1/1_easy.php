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
     **/

    class Rectangle {
        
            // set width and height to use as variable in the functions of class rectangle
            
            public $width = 0;
            public $height = 0;
            
            function __construct($width,$height){
            // a contructor that takes the width and height from a rectangle object
                $this->width = $width;
                $this->height = $height;
                
                
            }
            public function getArea(){
                // returns the area of the passed height and width
                $area = $this->width * $this-height;
                return $area;
                
            }
            public function getPerimeter(){
                // returns the perimeter
                $perimeter = 2 * ($this->width + $this->height);
                return $perimeter;
                
            } // if the height and width are not the same then the shape is not a square
            public function isSquare(){
                if($this->width == $this->height){
                    return true;
                    
                }else{
                    return false;
                }
                
            }
            
        
    }
    
    
        $width = 160;
        $height = 75;
    
        echo "<h2>With a width of $width and a height of $height...</h2>";
    
        $r = new Rectangle($width, $height);
    
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