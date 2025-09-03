<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public $perPage = 7;
    public $search = '';
    public $sortByColumn = 'created_at';
    public $sortDirection = 'DESC';

    public function setSortFunctionality($columnName)
    {
        if ($this->sortByColumn == $columnName) {
            $this->sortDirection = ($this->sortDirection == 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        $this->sortByColumn = $columnName;
        $this->sortDirection = 'ASC';
    }

    public function render()
    {
        return view('livewire.admin.users.user-table', [
            'users' => User::search($this->search)
                ->orderBy($this->sortByColumn,$this->sortDirection)
                ->paginate($this->perPage)]);
    }
}
