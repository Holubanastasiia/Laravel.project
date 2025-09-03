<?php

namespace App\Livewire\Admin\Users;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\{Title, Layout};

class UserList extends Component
{
    public string $title = "User List";
    #[Title('Management User List')]
    #[Layout('layouts.admin')]

    public function render()
    {
        return view('livewire.admin.users.user-list')->with(
            ['user' => Auth::user()->name, 'breadcrumb' => 'User List', 'title' => 'User List']
        );
    }
}
