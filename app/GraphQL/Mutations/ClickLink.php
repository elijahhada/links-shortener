<?php

namespace App\GraphQL\Mutations;

use App\Models\ShortLink;

final class ClickLink
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $link = ShortLink::where('short_link', $args['short_link'])->first();

        if(!$link) {
            throw new \Exception('Associated link ' . $args['short_link'] . ' could not be found.');
        }
        $link->clicks++;
        $link->save();

        return $link;
    }
}
