<?php

namespace App\Models;

class Event
{
    private \WP_Post $post;
    private array $acf;

    public function __construct(\WP_Post $post)
    {
        $this->post = $post;
        $this->acf = get_fields($post);
    }
}
