<?php

namespace App\Mappers;

use App\Models\Project;

class ProjectSliderMapper
{
    private \WP_Post $project;

    public function __construct(\WP_Post $project)
    {
        $this->project = $project;
    }

    public function map()
    {
        return new Project($this->project);
    }

    public static function mapStatic(\WP_Post $post)
    {
        return (new self($post))->map();
    }
}
