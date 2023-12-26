<?php

namespace App\Http\Livewire;

use Livewire\Component;


class SideBar extends Component
{  
    public $isSidebarOpen = false;

    public function toggleSidebar()
    {
        $this->isSidebarOpen = !$this->isSidebarOpen;
    }
    
    public function render()
    {
        return view('livewire.side-bar');
    }
}
