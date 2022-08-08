<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class BackButtonComposer extends Composer
{
    protected static $views = [
        'partials.back-button'
    ];

    protected function with()
    {
        return [
            'backUrl' => $this->getBackUrl()
        ];
    }

    private function getBackUrl()
    {       $post = get_queried_object();

        if ($post->post_type == 'project') {
            $term = get_the_terms($post, 'project-category')[0];

            return get_term_link($term);
        }

        if ($post->post_type == 'event') {
            if (pll_current_language() == 'ru') {
                return '/' . pll_current_language() . '/event';
            }
            return '/event';
        }

        return get_home_url();
    }
}
