<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class CalculateModalComposer extends Composer
{
    protected static $views = [
        'components.calculate-modal'
    ];

    protected function with()
    {
        return [
            'districts' => $this->districts(),
            'types' => $this->types(),
            'wall' => $this->wall(),
        ];
    }

    private function districts()
    {
        return array_map(function ($item) {
            return pll__($item);
        }, config('districts'));
    }

    private function types()
    {
        return array_map(function ($item) {
            return pll__($item);
        }, config('types'));
    }

    private function wall()
    {
        return config('wall');
    }


}
