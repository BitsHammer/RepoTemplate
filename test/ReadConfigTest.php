<?php

use com\bitshammer\repoTeamplate\util\Properties;
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 19/11/2016
 * Time: 15:38
 */
use PHPUnit\Framework\TestCase;

class ReadConfigTest extends TestCase
{
    public function testAddItem()
    {
        self::assertNotEmpty(Properties::getInstance());
    }
}
