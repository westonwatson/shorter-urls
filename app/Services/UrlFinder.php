<?php

namespace App\Services;

use App\Link;

class UrlFinder
{
    /*
     * UrlFinder - Search Links for Short URL Token
     */

    /**
     * @param string $token
     * @return mixed
     */
    public function find(string $token)
    {
        $id = $this->convertTokenToInteger($token);
        $link = Link::findOrFail($id);
        $link->tally();

        return $link->url;
    }

    /**
     * @param string $token
     * @return bool|string
     */
    private function convertTokenToInteger(string $token)
    {
        return base64_decode($token);
    }
}