<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;


class SearchResult extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('buscar');
        $users = User::where('name', 'LIKE', '%' . $searchTerm . '%')->get();

        return view('components.search-result', ['users' => $users]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-result', [ 'users' => User::all()]);
    }
}
