<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Configurationtest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $shortName = config("coba.biodata.shortName");
        $fullName = config("coba.biodata.fullName");
        self::assertEquals($shortName, "alam");
        self::assertEquals($fullName, "muhammad alamsyah");
    }
}
