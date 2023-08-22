<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class</title>
</head>
<body>
    <?php
    class Calc{
        public $a,$b,$c;
        
        public function add(){
           $this->c =$this->a + $this->b ;
            return $this->c;
        }

        public function sub(){
            $this->c=$this->a - $this->b;
            return $this->c;
        }
    }

    $val = new Calc();
    $val->a=50;
    $val->b=20;
    echo "<h3>Total :". $val->add()."</h3>";
    echo "<h3>Difference:". $val->sub()."</h3>";
    

    
    ?>


</body>
</html>