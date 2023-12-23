<?php
namespace DanielCristeaa\AwesomeAbTesting\Tests\Unit;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Orchestra\Testbench\TestCase;
use DanielCristeaa\AwesomeAbTesting\Models\AbTest;

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
