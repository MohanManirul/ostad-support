<?php

interface BankAccount {
    public function credit(int $amount, string $time, string $acc);
    public function debit(int $amount, string $time, string $acc);
    public function getBalance(): int; // Adding a method to get the balance
}

class ManageBankAccount implements BankAccount {


    public function __construct(public $amount, public $time, public $acc ) {

      }

    private int $balance = 0; // Property to store the balance

    public function credit(int $amount, string $time, string $acc)
    {
        $this->balance += $amount;
        // Optionally, you can log the transaction time and account
        echo "Credited $amount to account $acc at $time. New balance: $this->balance\n";
    }

    public function debit(int $amount, string $time, string $acc)
    {
        if ($amount > $this->balance) {
            echo "Insufficient funds to debit $amount from account $acc.\n";
            return;
        }
        $this->balance -= $amount;
        // Optionally, log the transaction time and account
        echo "Debited $amount from account $acc at $time. New balance: $this->balance\n";
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}

// Example usage
$account = new ManageBankAccount();
$account->credit(100, '2024-10-30 10:00', 'ACC123');
$account->debit(50, '2024-10-30 11:00', 'ACC123');
echo "Current balance: " . $account->getBalance() . "\n";
