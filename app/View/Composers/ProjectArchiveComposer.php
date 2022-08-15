<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ProjectArchiveComposer extends Composer
{
    protected static $views = ['archive-project'];

    protected function with()
    {
        return [
            'whiteButtonList' => $this->link(),
            'categories' => get_terms([
                'taxonomy' => 'project-category',
                'hide_empty' => true,
                'hierarchical' => false,
            ])
        ];
    }

    private function link()
    {
            if (pll_current_language() == 'ru') {
                return '/' . pll_current_language() . '/event';
            }
            return '/event';
    }
}
