<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class matapelajaranTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
   $x1 = config("matapelajaran.matapelajaran.matapelajaran_x.x1");
   $x1Config = Config::get("matapelajaran.matapelajaran.matapelajaran_x.x1");
   $xx1 = config(
    "matapelajaran.matapelajaran.matapelajaran_x.x3.xx1"
   );
   self:: assertEquals($x1,"kelas x1");
   self:: assertEquals($xx1, "kelas xx1");
   self:: assertEquals($x1Config, $x1);
    }
}
