<?php

namespace App\GraphQL\Mutations;

use App\Models\ShortLink;
use Illuminate\Support\Facades\Hash;

final class ShortenLink
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $link = ShortLink::where('full_link', $args['full_link'])->first();

        if($link) {
           throw new \Exception('Given link ' . $args['full_link'] . ' already exists.');
        }
        $newLink = new ShortLink();
        $newLink->full_link = $args['full_link'];
        $newLink->short_link = substr(Hash::make($args['full_link'] . time()), strlen(Hash::make($args['full_link'] . time())) - 10);
        $newLink->clicks = 0;
        $newLink->save();

        return $newLink;
    }
}
