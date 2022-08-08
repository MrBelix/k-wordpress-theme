<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class IndividualModalComposer extends Composer
{
    protected static $views = [
        'components.individual-modal'
    ];

    protected function with()
    {
        return [
            'districts' => $this->districts(),
        ];
    }

    private function districts()
    {
        return array_map(function ($item) {
            return pll__($item);
        }, config('districts'));
    }


}
