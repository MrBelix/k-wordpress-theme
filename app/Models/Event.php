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

    public function getTitle()
    {
        return $this->post->post_title;
    }

    public function getThumbnail()
    {
        return get_the_post_thumbnail_url($this->post);
    }

    public function getDate()
    {
        return $this->acf['date']??'';
    }

    public function getAddress()
    {
        return $this->acf['address']??'';
    }

    public function getText()
    {
        return $this->acf['text'];
    }

    public function getLeftList()
    {
        return $this->acf['left-list'];
    }

    public function getRightText()
    {
        return $this->acf['right-text'];
    }

    public function getRightList()
    {
        return $this->acf['right-list'];
    }
}
