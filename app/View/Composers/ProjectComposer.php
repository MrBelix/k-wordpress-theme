<?php

namespace App\View\Composers;

use App\Models\Project;
use Roots\Acorn\View\Composer;

class ProjectComposer extends Composer
{
    protected static $views = [
        'single-project'
    ];

    public function with()
    {
        $post = get_post();
        $term = get_the_terms($post, 'project-category')[0];
        $acf = get_fields($term);

        return [
            'hero' => [
                'title' => $term->name,
                'background' => get_field('thumbnail', $term)['url']
            ],
            'project' => new Project($post),
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
