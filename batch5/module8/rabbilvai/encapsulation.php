<?php
class BankAccount {
    private $balance;  // Private property

    public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            throw new InvalidArgumentException("Deposit amount must be positive");
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            throw new InvalidArgumentException("Invalid withdrawal amount");
        }
    }

    public function getBalance() {
        return $this->balance;  // Public method to access the private property
    }
}

// Usage
$account = new BankAccount();
$account->deposit(100);
echo $account->getBalance();  // Output: 100
$account->withdraw(50);
echo $account->getBalance();  // Output: 50
?>
