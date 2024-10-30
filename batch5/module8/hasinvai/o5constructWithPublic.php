<?php 
class MileageCalculator {
    public function __construct(public $pricePerLitre, public $distance, public $totalFuelPrice, public $vehicleType) {}

    function calculateKMPL() {
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
        $mileage = $this->distance / $totalFuel;
        echo "The mileage of the {$this->vehicleType} is {$mileage} kmpl.\n";
    }
}

$motorcycle = new MileageCalculator(122, 100, 400, 'motorcycle'); // instantiate
$motorcycle->calculateKMPL();

$car = new MileageCalculator(122, 100, 2000, 'car'); // instantiate
$car->calculateKMPL();

$hybridCar = new MileageCalculator(122, 100, 800, 'hybrid'); // instantiate
$hybridCar->calculateKMPL();
