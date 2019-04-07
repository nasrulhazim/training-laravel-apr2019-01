<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;

class SeedPreseedCommandTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_pre_seed_command()
    {
        $this->assertTrue(
            array_has(\Artisan::all(), 'seed:pre')
        );
    }

    /** @test */
    public function it_has_preseed_tables()
    {
        $this->assertTrue(Schema::hasTable('users'));
    }

    /** @test */
    public function it_has_preseed_seeder()
    {
        $this->assertTrue(class_exists('SeedPreseedCommand'));
    }

    /** @test */
    public function it_can_call_preseed_seeder()
    {
        $this->artisan('seed:pre')
         ->expectsOutput('Database seeding completed successfully.')
         ->assertExitCode(0);
    }

    /** @test */
    public function it_can_seed_preseed_data()
    {
        $this->artisan('seed:pre');
        
        $this->assertDatabaseHas('users', [
            'email' => 'superadmin@app.com'
        ]);
    }
}
