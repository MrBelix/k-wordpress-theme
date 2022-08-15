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
        $childs = get_term_children($term->term_id, 'project-category');

        return [
            'is_parent' => count($childs) > 0,
            'hero' => [
                'title' => $term->name,
                'background' => $acf['thumbnail']['url']??'',
                'background_mobile' => $acf['thumbnail']['url']??'',
                'is_video' => true,
            ],
            'children' => array_map([$this, 'childMap'], $childs),
            'links' => array_map(function ($id) {
                $term = get_term($id);
                $link = get_field('link_image', $term);

                return [
                    'name' => $term->name,
                    'link' => get_term_link($term),
                    'image' => (!empty($link)? $link : get_field('thumbnail', $term))['url']??null
                ];
            }, $acf['categories'])
        ];
    }

    private function childMap($item) {
        $term = get_term($item);
        $term->nameS = preg_split("# #", $term->name, 2);

        return $term;
    }
}
