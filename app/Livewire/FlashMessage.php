<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;


// app/Livewire/FlashMessage.php

class FlashMessage extends Component
{
    public string $message = '';
    public string $type = '';

    public function mount()
    {
        // ✅ اقرأ من الـ session بعد الـ redirect
        $this->message = session('message', '');
        $this->type    = session('type', 'success');
    }

    #[On('flash')]
    public function showMessage($message, $type = 'success')
    {
        $this->message = $message;
        $this->type    = $type;
    }

    public function render()
    {
        return view('livewire.flash-message');
    }
}
