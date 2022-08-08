<?php

namespace App\View\Composers;

use App\Mappers\ProjectSliderMapper;
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
        $fields = get_fields();
        $term = get_the_terms($post, 'project-category')[0];

        $projects = $fields['slider']['projects'];

        return [
            'hero' => [
                'title' => $term->name,
                'background' => get_field('thumbnail', $term)['url']
            ],
            'project' => new Project($post),
            'slider' => array_merge($fields['slider']??[], [
                'projects' => array_map([$this, 'sliderMap'],  !empty($projects)?$projects:[])
            ])
        ];
    }

    private function sliderMap($item): Project
    {
        return new Project($item['project']);
    }
}
