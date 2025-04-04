<?php

namespace App\View\Components\SideNav;

use Illuminate\View\Component;

class NavLink extends Component
{
    public function __construct(
        public string $href
    ) {}

    public function render()
    {
        return view('components.side-nav.nav-link');
    }
}
