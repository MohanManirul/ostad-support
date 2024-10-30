<?php
class Inventory {
    public $items = [];

    function addItems($productName, $numberOfItems, $costPerItem) {
        $this->items[$productName] = [
            'numberOfItems' => $numberOfItems,
            'costPerItem' => $costPerItem,
            'totalCost' => $numberOfItems * $costPerItem
        ];
    }

    function displayItems() {
        foreach ($this->items as $productName => $details) {
            echo "Product: {$productName}, Number of Items: {$details['numberOfItems']}, Cost per Item: {$details['costPerItem']}, Total Cost: {$details['totalCost']}\n";
        }
    }
}

// Example usage
$inventory = new Inventory();
$inventory->addItems('Apple', 10, 2); // 10 apples at $2 each
$inventory->addItems('Banana', 5, 1.5); // 5 bananas at $1.5 each

$inventory->displayItems();
