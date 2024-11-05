<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class TransactionDashboard extends Component
{
    #[Title('Transaction Dashboard')]
    public function render()
    {
        return view('livewire.transaction-dashboard');
    }
}
