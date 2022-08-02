<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ProjectCategoryComposer extends Composer
{
    protected static $views = [
        'taxonomy-project-category'
    ];

    public function with()
    {
        $term = get_queried_object();
        $acf = get_fields($term);

        return [
            'hero' => [
                'title' => $term->name,
                'background' => $acf['thumbnail']['url']??'',
            ],
            'links' => array_map(function ($id) {
                $term = get_term($id);
                return [
                    'name' => $term->name,
                    'link' => get_term_link($term)
                ];
            }, $acf['categories'])
        ];
    }
}
