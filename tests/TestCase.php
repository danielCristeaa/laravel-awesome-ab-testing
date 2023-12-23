<?php

namespace DanielCristeaa\AwesomeAbTesting\Tests;

use DanielCristeaa\AwesomeAbTesting\AwesomeAbTestingServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'DanielCristeaa\\AwesomeAbTesting\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            AwesomeAbTestingServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_awesome_ab_testing_table.php.stub';
        $migration->up();

    }
}
