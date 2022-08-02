<?php

namespace App\View\Composers;

use App\Models\Project;
use Roots\Acorn\View\Composer;

class LicensesTemplate extends Composer
{
    protected static $views = [
        'template-licenses'
    ];

    public function with()
    {
        $fields = get_fields();

        return [
            'licenses' => get_posts(['post_type' => 'license']),
            'acknowledgments' => get_posts(['post_type' => 'acknowledgment']),
            'title' => get_the_title(),
            'background' => $fields['background']['url']??null,
            'slider' => array_merge($fields['slider']??[], [
                'projects' => array_map([$this, 'sliderMap'], $fields['slider']['projects']??[])
            ])
        ];
    }

    private function sliderMap($item): Project
    {
        return new Project($item['project']);
    }
}
