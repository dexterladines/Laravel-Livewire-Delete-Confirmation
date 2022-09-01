<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
  
class Select2 extends Component
{
    public $selCity = '';
    public $cities = [
        'Manila',
        'Cebu',
        'Davao',
    ]; 
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.select2')->extends('layouts.app');
    }
}