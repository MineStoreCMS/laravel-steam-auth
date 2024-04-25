<?php

namespace Teh9\LaravelSteamAuth;

use Illuminate\Support\Fluent;

class SteamInfo extends Fluent
{
    /**
     * {@inheritdoc}
     */
    public function __construct($data)
    {
        $steamID = $data['steamid'] ?? null;
        unset($data['steamid']);

        parent::__construct($data);

        $this->attributes['steamID64'] = $steamID;
    }
}
