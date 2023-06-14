<?php

namespace App\View\Components\lepel;

use Closure;
use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class lepelList extends Component {
    /**
     * Create a new component instance.
     */
    public function __construct(
        public User $user,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.lepel.lepel-list');
    }
}