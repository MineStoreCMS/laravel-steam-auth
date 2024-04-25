<?php

namespace Teh9\LaravelSteamAuth;

interface SteamAuthInterface
{
    public function redirect();

    public function validate();

    public function getAuthUrl();

    public function getSteamId();

    public function getUserInfo();
}
