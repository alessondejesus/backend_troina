<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;

class Index extends Component
{
    public $message;

    public function mount()
    {
        $this->message = 'Olá, seja bem vindo a página de usuarios! :)';
    }

    public function render()
    {
        return view('livewire.admin.pages.user.index');
    }
}
