<?php

class Vehicle {
    private $capacity;
    private $description;
    
    public function __construct($capacity=5, $description='cool') {
        $this->capacity = $capacity;
        $this->description = $description;
    }

    public function getCapacity() { 
        return $this->capacity; 
    }
    
    public function setCapacity($capacity=5) { 
        $this->capacity = $capacity; 
    }

    public function getDescription() { 
        return $this->description; 
    }
    
    public function setDescription($description='cool') { 
        $this->description = $description; 
    }
}


class SportsCar extends Vehicle {
    private $name;

    public function __construct($name='BMW', $capacity, $description){
        parent::__construct($capacity, $description);
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name='BMW'){
        $this->name = $name;
    }
}

$sports_cars = [
    new SportsCar('Mazda', 2, 'MX-5'),
    new SportsCar('Porsche', 3, '911'),
    new SportsCar('Alpine', 1, 'A110'),
    new SportsCar('Porsche', 2, '718 Boxster/Cayman'),
    new SportsCar('McLaren', 4, '720S'),
    new SportsCar('BMW', 2, 'M3')
]

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Sports Cars</title>
  </head>
  </head>
  <body>
      
    <table class="table-bordered table-striped table-hover table-sm">
        <thead>
            <tr>
                <th>Name</th>
                <th>Capacity</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sports_cars as $sports_car) { ?>
            <tr>
                <td><?php echo $sports_car->getName(); ?></td>
                <td><?php echo $sports_car->getCapacity(); ?></td>
                <td><?php echo $sports_car->getDescription(); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

  </body>
</html>