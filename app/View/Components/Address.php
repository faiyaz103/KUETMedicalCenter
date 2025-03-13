<?php

namespace App\View\Components;

use App\Models\Contact;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Address extends Component
{
    /**
     * Create a new component instance.
     */

     public $contact;
    public function __construct()
    {
        //
        $this->contact = Contact::first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.address');
    }
}
