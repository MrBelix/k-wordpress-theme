<?php

namespace App\Models;

use Illuminate\Support\Arr;
use WP_Post;

class Project
{
    /**
     * @var \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    private static array $config;
    private WP_Post $post;
    private array $acf;

    public function __construct(WP_Post $post)
    {
        $this->initConfig();
        $this->post = $post;
        $this->acf = get_fields($post);
    }

    public function getUrl()
    {
        return get_post_permalink($this->post);
    }

    public function getTitle()
    {
        return $this->post->post_title;
    }

    public function getDistrict()
    {
        return pll__(config('districts.'.$this->acf['district'])) . ' обл.';
    }

    public function getGallery()
    {
        return $this->acf['images'];
    }

    public function getThumbnail()
    {
        return $this->acf['images'][0]??null;
    }

    public function getInfo()
    {
        $conf = self::$config['info'];

        return array_filter(
            array_map([$this, 'infoMap'], $conf, array_keys($conf)),
            [$this, 'infoFilter']
        );
    }

    private function infoMap($item, $key)
    {
            return array_merge($item, [
                'value' => $this->acf[$key]
            ]);
    }

    private function infoFilter($item)
    {
        return !empty($item['value']);
    }

    private function initConfig()
    {
        if (empty(static::$config)) {
            static::$config = config('project');
        }
    }
}
