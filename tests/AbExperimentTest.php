<?php

namespace DanielCristeaa\AwesomeAbTesting\Tests\Unit;

use DanielCristeaa\AwesomeAbTesting\Models\AbTest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase;

class ABExperimentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_experiment()
    {
        $experiment = AbTest::factory()->create(['name' => 'Fake experiment']);

        $this->assertEquals('Fake experiment', $experiment->name);
    }
}
