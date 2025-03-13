<?php

namespace App\View\Components;

use App\Models\Notice;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestNotice extends Component
{
    /**
     * Create a new component instance.
     */

     public $latestNotice;
    public function __construct()
    {
        // fetches latest notice
        $this->latestNotice = Notice::orderBy('created_at', 'desc')->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.latest-notice');
    }
}
