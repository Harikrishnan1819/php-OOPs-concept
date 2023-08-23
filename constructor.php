<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor</title>
</head>
<body>
    <?php
    class Bike{
        public $color;
        public $model;
        public $version;

        public function __construct($color, $model, $version) {
            $this->color = $color;
            $this->model = $model;
            $this->version = $version;
        }
        
            public function msg(){
                return "My bike is " . $this->color . " " . $this->model ." " . $this->version. "....!";
            }

        
        
    }
    $myBike = new Bike("black", "R15", "v3");
    echo $myBike -> msg();
    echo "<br>" ;
    
    $myBike = new Bike("Green", "Ninja", "v4");
    echo $myBike -> msg();
    ?>
</body>
</html>