<?php

namespace App\View\Composers;

use App\Models\Project;
use Roots\Acorn\View\Composer;

class EventComposer extends Composer
{
    protected static $views = [
        'single-event'
    ];

    public function with()
    {
        $event = get_queried_object();
        $fields = get_fields($event);

        return [
            'hero' => [
                'title' => pll__('Події'),
                'background' => get_field('eventsbackground', 'options')['url']??''
            ],
            'event' => $event,
            'eventFields' => $fields,
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
