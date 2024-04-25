<?php

namespace Teh9\LaravelSteamAuth\Tests\Unit;

use Teh9\LaravelSteamAuth\SteamInfo;
use Teh9\LaravelSteamAuth\Tests\TestCase;

class SteamInfoTest extends TestCase
{
    public function testConstruct()
    {
        $data = $this->getSteamInfoData();
        $steamInfo = new SteamInfo($data);

        $this->assertInstanceOf(SteamInfo::class, $steamInfo);
    }

    public function testSteamid()
    {
        $data = $this->getSteamInfoData();
        $steamInfo = new SteamInfo($data);

        $this->assertArrayNotHasKey('steamid', $steamInfo);
        $this->assertArrayHasKey('steamID64', $steamInfo->toArray());
        $this->assertEquals($data['steamid'], $steamInfo['steamID64']);
    }
}
