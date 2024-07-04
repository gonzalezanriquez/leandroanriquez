<?php

// app/View/Components/DeleteUserModal.php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class DeleteUserModal extends Component
{
    public $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.delete-user-modal');
    }
}