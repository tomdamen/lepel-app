<?php

namespace App\View\Components\lepel;

use Closure;
use App\Models\Lepel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class overview extends Component {
    /**
     * Create a new component instance.
     */
    public function __construct(public int $userId, public string $date) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        $lepels = Lepel::getLepelsByDate(1, date('Y-m-d'));

        dd($lepels);

        return view('components.lepel.overview', ['lepels' => $lepels]);
    }
}