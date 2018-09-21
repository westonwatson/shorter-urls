<?php

namespace App\Services;

use App\Link;

class LinkMaker
{
    /*
     * Create Link Record from URL
     */

    /**
     * @param string $url
     * @return Link
     */
    public function create(string $url)
    {
        $link = new Link();

        $link->url = $this->cleanUrl($url);
        $link->hits = 0;
        $link->save();

        return $link;
    }

    /**
     * @param string $url
     * @return string
     */
    private function cleanUrl(string $url)
    {
        if (stripos($url, '://') === false) {
            $url = "http://{$url}";
        }

        return $url;
    }

}