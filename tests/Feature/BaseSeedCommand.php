<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;

class BaseSeedCommand extends TestCase
{
    use RefreshDatabase;

	/** @test */
    public function it_has_seed_command()
    {
        $this->assertTrue(
            array_has(\Artisan::all(), $this->seed_command)
        );
    }

    /** @test */
    public function it_has_tables()
    {
    	foreach ($this->tables as $table) {
    		$this->assertTrue(Schema::hasTable($table));
    	}
    }

    /** @test */
    public function it_has_seeder()
    {
        $this->assertTrue(class_exists($this->seed_command_class));
    }

    /** @test */
    public function it_can_call_seeder()
    {
        $this->artisan($this->seed_command)
         ->expectsOutput('Database seeding completed successfully.')
         ->assertExitCode(0);
    }

    /** @test */
    public function it_can_seed_data()
    {
        $this->artisan($this->seed_command);
        
        // do your things...
    }
}