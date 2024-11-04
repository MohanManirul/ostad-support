<?php
class MileageCalculator
{
    public $pricePerLiter;
    public $distance;
    public $totalFuelPrice;

    public function calKMPL($vehicle)
    {
        // Ensure pricePerLiter is not zero to avoid division by zero
        if ($this->pricePerLiter > 0) {
            $totalFuel = $this->totalFuelPrice / $this->pricePerLiter;
            $mileage = $this->distance / $totalFuel;
            echo "The mileage of the {$vehicle} is " . round($mileage, 2) . " kmpl\n";
        } else {
            echo "Price per liter must be greater than zero.\n";
        }
    }
}

$motorcycle = new MileageCalculator(); // Corrected instantiation
$motorcycle->totalFuelPrice = 500;
$motorcycle->pricePerLiter = 122;
$motorcycle->distance = 100;
$motorcycle->calKMPL("motorcycle"); // Pass the vehicle type as a parameter

$car = new MileageCalculator();
$car->totalFuelPrice = 1000;
$car->distance = 100;
$car->pricePerLiter = 122;
$car->calKMPL("car"); // Pass the vehicle type as a parameter
?>
