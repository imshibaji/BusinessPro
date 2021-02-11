<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Spatie\Permission\Models\Permission;

class User extends Component
{
    public $users;

    public function mount(){
        $this->users = Permission::all();
    }

    public function render()
    {
        return view('livewire.user')
        ->extends('admin::layouts.master')
        ->section('content');
    }
}
