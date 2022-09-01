<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class Users extends Component
{

    public $deleteId = '';

    public function render()
    {
        return view('livewire.users', [
            'users' => User::take(10)->get(),
        ])
        ->extends('layouts.app');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        User::find($this->deleteId)->delete();
    }
}
